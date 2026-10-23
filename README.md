## Central UI Theme

A theme for the [Mercy Scaffold](https://github.com/aklebe-laravel/mercy-scaffold)
(based on [alizharb/laravel-themer](https://github.com/alizharb/laravel-themer)).

Admin and supervisor theme for the [CentralUi module](https://github.com/aklebe-laravel/central-ui-module) (Proxmox desktop). Child theme
of [mercy-blank](https://github.com/aklebe-laravel/mercy-blank-theme): views that are missing here come from the parent.

## Installation

Add the theme to `requires` in the project's `setup.yaml` and set it as `kernel.theme`, see
[Require modules and themes](https://github.com/aklebe-laravel/deploy-env-module#require-modules-and-themes).
The parent theme `mercy-blank` is always installed (Mercy core).

## Structure

| Path                      | Content                                      |
|---------------------------|----------------------------------------------|
| `theme.json`              | name, parent, screenshots, design tokens     |
| `resources/views`         | Blade views (layouts, auth, components, ...) |
| `resources/assets/css`    | Tailwind 4 entry (`app.css`)                 |
| `resources/assets/js`     | JavaScript entry (`app.js`)                  |
| `resources/assets/images` | images used by the views                     |

## Build

A theme has no own build. Its CSS and JS are part of the scaffold's Vite build: `deploy-env:build-mercy-assets` writes imports of the enabled modules and the current theme
(`storage/app/mercy-generated/`), the root `resources/js/app.js` imports them. In the **project root**:

```
# dev server with hot reload
sail npm run dev

# build
sail artisan deploy-env:build-mercy-assets
npm ci && npm run build
```

The production build (`php build.php create`) runs these steps itself.
Static files like images are published by laravel-themer to `public/themes/central-ui`.

## License

MIT, see [LICENSE.md](LICENSE.md).
