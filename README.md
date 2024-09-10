# dub/laravel-dub

The official Laravel SDK for the Dub.co API.

## Installation

To install this SDK, you can use the following composer command:

```bash
composer require dub/laravel-dub
```

Once this has been installed, you will need to add the `DUB_API_KEY` environment variable.

This package will look for this environment variable when loading `services.dub.api_key` from configuration, but you don't need to register this in your configuration as it will do this as part of the package loading process.

## Usage

Once you have installed and set this package up, you can use the Laravel DI container to pull in the `Dub` class, and start interacting with it.

```php
use Dub\Dub;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final readonly class LinksController
{
    public function __construct(
        private Dub $dub,
    ) {}
    
    public function index(Request $request): View
    {
        return view('links.index', [
            'links' => $this->dub->links->list(),
        ]);
    }
}
```

The `Dub` SDK class exposes the following properties that you can use to get data from the Dub.co API:

- `links`: Interact with the Links endpoints on Dub.co
- `analytics`: Interact with the Analytics endpoints on Dub.co
- `events`: Interact with the Events endpoints on Dub.co
- `qrCodes`: Interact with the QR Codes endpoints on Dub.co
- `tags`: Interact with the Tags endpoints on Dub.co
- `domains`: Interact with the Domains endpoints on Dub.co
- `workspaces`: Interact with the Workspaces endpoints on Dub.co
- `metatags`: Interact with the Metatags endpoints on Dub.co
- `track`: Interact with the Track endpoints on Dub.co
