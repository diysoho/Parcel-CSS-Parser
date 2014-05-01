# [Parcel PHP CSS Parser](https://github.com/jakerb/Parcel-CSS-Parser)

Parcel is a PHP class that allows you to extract values from CSS/3 properties.

* Source: [https://github.com/jakerb/Parcel-CSS-Parser](https://github.com/jakerb/Parcel-CSS-Parser)
* Twitter: [@jakebown1](http://twitter.com/jakebown1)


## Download

Choose one of the following options:

1. Download the latest stable release from
   [Parcel on Github](https://github.com/jakerb/Parcel-CSS-Parser).
2. Clone the git repo — `git clone
   https://github.com/jakerb/Parcel-CSS-Parser.git` - and checkout the tagged
   release you'd like to use.


## Quick Start
1. include the class in your PHP project using 'include("path/to/parcelclass.php");'.
2. instantiate the class including your CSS file, '$hello = new parcel("path/to/style.css")'.
3. using "find" to get the value, for example, to find the color of the paragraph tag use '$hello->find("color", "p");'.

## Finding Classes
1. Add the class to parse by using 'parseClass' - '$hello->parseClass("myClass");'.
2. To echo the border radius of your new class simply do '$hello->find("myClass", "border-radius");'.


## Updates
Please feel free to improve Parcel to make it better for everyone! 
