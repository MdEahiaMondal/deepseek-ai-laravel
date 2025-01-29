# DeepSeek AI Laravel

DeepSeek AI Laravel is a Laravel package that provides seamless integration with DeepSeek AI APIs, allowing you to easily interact with AI-powered chat services within your Laravel applications.

## Installation

### Step 1: Install via Composer

You can install the package using Composer:

```bash
composer require eahiya/deepseek-ai-laravel
```

### Step 2: Publish Configuration

Run the following command to publish the package's configuration file:

```bash
php artisan vendor:publish --provider="eahiya\DeepSeekAI\DeepSeekAIServiceProvider" --tag="deepseek-config"
```

### Step 3: Set API Key

After publishing the configuration, add your DeepSeek API key to your `.env` file:

```env
DEEPSEEK_API_KEY=your-api-key,
```

## Usage

### Using the Facade

You can use the `DeepSeekAI` facade to interact with the API:

```php
use eahiya\DeepSeekAI\Facades\DeepSeekAI;

$response = DeepSeekAI::chat([
    ['role' => 'user', 'content' => 'Hello, how are you?']
],'deepseek-chat');

dd($response);
```

### Using Dependency Injection

You can also use dependency injection to resolve the service:

```php
use eahiya\DeepSeekAI\Services\DeepSeekAIClient;

public function someMethod(DeepSeekAIClient $deepSeek)
{
    $response = $deepSeek->chat([
        ['role' => 'user', 'content' => 'Hello, how are you?']
    ], 'deepseek-chat');

    return $response;
}
```

## Configuration

The package publishes a configuration file located at `config/deepseek.php`. You can customize the API endpoint and other settings there.

## License

This package is open-source and licensed under the [MIT license](LICENSE).

## Contributing

If you'd like to contribute, feel free to submit a pull request or open an issue on [GitHub](https://github.com/eahiya/deepseek-ai-laravel).

## Support

For any issues, please open an issue on the GitHub repository or contact support.

---

Enjoy using DeepSeek AI Laravel! 🚀

