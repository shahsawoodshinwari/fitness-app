<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name', 'Fitness App') }}</title>

  @vite(['resources/saas/app.scss', 'resources/saas/welcome.scss'])
</head>

<body data-bs-theme="dark" class="d-flex flex-column h-100">
  <main class="flex-grow-1 overflow-y-auto container py-3">
    ...
  </main>
  <x-navigation></x-navigation>

  @vite(['resources/js/app.js'])
</body>

</html>