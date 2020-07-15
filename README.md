# erp_type_extend_example

Locate to the shop root directory (where the folders source and vendor are located).

edit composer.json
replace  
`"minimum-stability: "stable"`  
with  
`"minimum-stability": "dev",`  

Save and exit.


```
mkdir repo
cd repo/
git clone https://github.com/michaelkeiluweit/erp_type_extend_example.git
cd ..
composer config repositories.oxs/examplemodule path repo/erp_type_extend_example/
composer require oxid-support/example
```
  
activate the module.
