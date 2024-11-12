#!/bin/bash

# Run tests and generate phpmd report
./vendor/bin/phpmd . html phpmd.xml --reportfile "public/report/index.html" --ignore-violations-on-exit
