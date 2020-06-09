## REST API Endpoint Plugin
The REST API Endpoint Plugin sends an HTTP request to a REST API endpoint (https://jsonplaceholder.typicode.com/users/). The plugin parses the JSON response and uses it to build and display an HTML table. Each row in the HTML table shows the details for a user(column's id, name, username, email, and details). When a visitor clicks any of the details links, it shows the additional user information. For that, the plugin does another API request to the user - details endpoint. These details fetching requests are asynchronous (AJAX), and the user details show without reloading the page. At any time, the page shows details for at max one user, and at every link click, a new user detail loads, replacing the one currently shown in the modal window. The HTML table is responsive, and the technology choice for styling is SASS. The plugin has full composer support. Provided are a couple of unit tests run without loading WordPress. The tools and technologies used for the unit tests are PHPUnit, Brain Monkey, and Mockery. 

<img src="https://github.com/PetarBelberov/rest-api-endpoint-plugin/blob/master/assets/img/table.jpeg" width="400"><img src="https://github.com/PetarBelberov/rest-api-endpoint-plugin/blob/master/assets/img/modal.jpeg" width="400">

## Installation
Cloning the repository, and running the composer update, is all you need to get this plugin ready to be added to WordPress.

## Usage
The plugin would be ready to use when you copy the **[inpsyde_shortcode]** inside WordPress posts, pages, sidebars, or other widgets. And the table will be visualized and ready to use.

## Feedback
Feel free to send me feedback on petar_belberov@gmx.com or file an issue. Feature requests are always welcome. If you wish to contribute, please do not hesitate.

If there's anything you'd like to chat about, please feel free to send me an email!

## License
The license is GNU General Public License v3.0.