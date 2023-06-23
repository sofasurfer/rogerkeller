#!/bin/bash

# rsync -rva  --exclude='cache/' --exclude='session/'   ./  vemamuwo@sl1702.web.hostpoint.ch:/home/vemamuwo/www/rogerkeller.xyz/
rsync -rva  --exclude='cache/' --exclude='sessions/' --exclude='config/config.php'   ./site/  vemamuwo@sl1702.web.hostpoint.ch:/home/vemamuwo/www/rogerkeller.xyz/site/
