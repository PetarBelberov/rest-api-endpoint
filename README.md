## REST API Endpoint Plugin
The REST API Endpoint Plugin sends an HTTP request to a REST API endpoint (https://jsonplaceholder.typicode.com/users/). The plugin parses the JSON response and uses it to build and display an HTML table. Each row in the HTML table shows the details for a user(column's id, name, username, email, and details). When a visitor clicks any of the details links, the additional user information is shown. For that, the plugin does another API request to the user - details endpoint. These details fetching requests are asynchronous (AJAX), and the user details are shown without reloading the page. At any time, the page shows details for at max one user, and at every link click, a new user detail loads, replacing the one currently shown in the modal window. The HTML table is responsive, and the technology choice for styling is SASS. The plugin has full composer support. A couple of unit tests are provided which run without loading WordPress. The tools and technologies used for the unit tests are PHPUnit, Brain Monkey, and Mockery.

## Installation
<!-- TO DO -->

## Usage
<!-- TO DO -->

## Feedback
Feel free to send me feedback on petar_belberov@gmx.com or file an issue. Feature requests are always welcome. If you wish to contribute, please do not hesitate.

If there's anything you'd like to chat about, please feel free to send me an email!

## License
The license is GNU General Public License v3.0.