<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateLanguageFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:langfiles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate language files for all supported languages';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Get the language list from the helper function
        $languages = getLanguageList();

        foreach ($languages as $code => $name) {
            $langPath = resource_path("lang/{$code}");
            $filePath = "{$langPath}/messages.php";

            // Ensure the language directory exists
            if (!File::exists($langPath)) {
                File::makeDirectory($langPath, 0755, true);
            }

            // Skip if the language file already exists
            if (File::exists($filePath)) {
                $this->warn("Language file already exists for '{$name}' ({$code}).");
                continue;
            }

            // Create the language file
            $template = <<<PHP
<?php

return [
    // Add your translations here for {$name}
];
PHP;
            File::put($filePath, $template);

            $this->info("Created language file for '{$name}' ({$code}).");
        }

        $this->info('All language files have been generated successfully.');
        return Command::SUCCESS;
    }
}