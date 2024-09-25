Testing
---

```shell
cp .env.testing.example .env.testing
```

```shell
php artisan test --env=testing --coverage-html tests/reports/coverage --coverage-clover=coverage.xml
```
