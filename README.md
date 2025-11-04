# blank
![Build Status](https://github.com/delboy1978uk/blank/actions/workflows/master.yml/badge.svg) [![Code Coverage](https://scrutinizer-ci.com/g/delboy1978uk/blank/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/delboy1978uk/blank/?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/delboy1978uk/blank/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/delboy1978uk/blank/?branch=master) <br />
a blank PHP setup for writing a new Github project with Composer and Packagist complete with travis builds and scrutinizer code coverage & quality analysis
##Usage
Simply clone this repository, delete the .git folder, tweak the composer.json, and do a couple of (case sensitive) find and replaces:
```
blank
Blank
Del
delboy1978uk
```

Rename the following files/folders:
```
src/Blank.php
tests/unit/Del/
tests/unit/Del/BlankTest.php
```
Finally, add your repository on Github and Scrutinizer, then commit and push to your GitHub repository.
Now GitHub has a commit with a composer.json, head over to Packagist and submit your repository.
### Note about tests
Tests are done using the awesome Codeception! Run tests from the root folder by typing:
```
vendor/bin/codecept run Unit
```
Tests will run on GitHub Actions, which will push code coverage to scrutinizer. Now you can start making tests and not 
worry about setup.
