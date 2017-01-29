## Lucidity Example Module 
Example layout of a lucidity module that can be installed into the main 'web' application


### Layout
```
📁 module               #top-level folder matches namespace
    📁 controller       #inner classes are namespaced as per structure
    📁 command          #e.g. namespace Inform/Command/DoThing
    📁 event
    📁 listener
    📁 repository
    📁 transformer
📁 config  
    📁 providers     
    📁 dictionary
📁 database
    📁 migrations
    📁 elasticsearch
📁 script
📁 views
📁 tests
📄 module.php
📄 routes.php
📄 composer.json
📄 README.md
```

