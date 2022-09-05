<h1>How to get the repository</h1>


Add the following to your composer.json
```
{
  "require": {
    "claims/module-base": "dev-master"
  },
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Minirock/claims-module-base"
    }
  ]
}
```

Then run composer require claims/module-base