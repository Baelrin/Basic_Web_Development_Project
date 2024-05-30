# Basic Web Development Project

This project demonstrates the basics of HTML, CSS, and PHP. It includes a simple HTML page styled with CSS and a PHP script to showcase basic programming concepts.

## Table of Contents

- [Basic Web Development Project](#basic-web-development-project)
  - [Table of Contents](#table-of-contents)
  - [Introduction](#introduction)
  - [Technologies](#technologies)
  - [Setup](#setup)
  - [Usage](#usage)
    - [HTML and CSS](#html-and-css)
    - [PHP](#php)
  - [Contributing](#contributing)
  - [License](#license)

## Introduction

This project is designed to help beginners learn the fundamentals of web development. It includes:

- An HTML page with a heading.
- CSS styling to change the color of the heading.
- A PHP script that demonstrates variables, arrays, and conditional statements.

## Technologies

The project uses the following technologies:

- HTML5
- CSS3
- PHP

## Setup

To get started with the project, follow these steps:

1. Clone the repository:

   ```bash
   git clone https://github.com/Baelrin/basic-web-development-project.git
   ```

2. Navigate to the project directory:

   ```bash
   cd basic-web-development-project
   ```

3. Open the `index.html` file in your web browser to view the HTML and CSS.

4. To run the PHP script, use a local server or an online PHP compiler like [w3schools PHP Tryit Editor](https://www.w3schools.com/php/phptryit.asp?filename=tryphp_compiler).

## Usage

### HTML and CSS

The HTML file (`index.html`) includes a heading styled with CSS:

```html
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Test Page</title>
		<style>
			.red-text {
				color: red;
			}
		</style>
	</head>
	<body>
		<h1 class="red-text">Test 1</h1>
	</body>
</html>
```

### PHP

The PHP script (`script.php`) demonstrates basic PHP concepts:

```php
<?php
// Create a variable and display it
$ученик = "Иванов Иван";
echo "Ученик: " . $ученик . "<br>";

// Create an array and display it
$ученики = ["Иванов", "Петров", "Сидоров"];
echo "Ученики: " . implode(", ", $ученики) . "<br>";

// If-else condition and display the result
$погода = "солнечно";
if ($погода == "солнечно") {
    echo "Идем гулять";
} else {
    echo "Остаемся дома";
}
?>
```

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request with your changes. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
