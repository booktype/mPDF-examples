# mPDF tutorial for Mozilla Festival 2016

Time: Sunday, 11:00am-11:45am

Place: Localisation, Floor 6 - 607 

## Why use PDF, when HTML is so much easier?

* PDF connects you to the global publishing supply chain
* It offers precise control over layouts
* A vector format means crisp fonts and graphics
* ~~It is a secure format and cannot be modified~~

## Of all the open source tools, why use mPDF?

* Specialised for making books
* Support for a very wide range of languages
* Bundled with global language fonts to work out of the box
* Ready-made features provide table of contents, indexes, bookmarks

## Getting started with PHP

* Command-line PHP support must be installed
  * Debian/Ubuntu `apt-get install php5-cli`
  * Red Hat/CentOS `yum install php-cli`
  * Windows (non thread safe version for x86 or x64 from http://windows.php.net/download/)
  * Mac (enabled by default)
* Check PHP version installed with `php -v`

## Download and install mPDF and examples

* Download and unpack mPDF
  * `wget https://github.com/mpdf/mpdf/archive/v6.1.2.zip`
  * `unzip v6.1.2.zip`
* Download and unpack the tutorial examples
  * `wget https://github.com/booktype/mPDF-examples/archive/v0.1.zip`
  * `unzip v0.1.zip`
* Change to the examples directory
  * `cd mPDF-examples-0.1`
  
## Run the example PHP scripts

* Run each script by name:
  * `php arabic.php`
  * `php chinese.php`
  * `php english.php`
* Check the results in your PDF viewer, e.g. on Debian/Ubuntu:
  * `evince arabic.pdf`
* Examine the PHP and source files, e.g:
  * `bluefish arabic.php`
  
## Comments to https://github.com/booktype/mPDF-examples/issues please!  
