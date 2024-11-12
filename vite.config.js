import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        // javascript
        'resources/js/app.js',

        // css
        'resources/saas/app.scss',
        'resources/saas/welcome.scss',
      ],
      refresh: true,
    }),
  ],
});
