<?php
require 'db_connection.php';
use PHPMailer\PHPMailer\PHPMailer;

// define variables and set to empty values
$fname = $lname = $email = $phone = $message = "";
$fnameErr = $lnameErr = $emailErr = $phoneErr = $messageErr = "";


function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$stmt = $conn->prepare("INSERT INTO messages (First_Name, Last_Name, Email, Phone, Message) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $fname, $lname, $email, $phone, $message);

	if (empty($_POST["fname"])) {
		$fnameErr = "Name is required";
	} else {
		$fname = test_input($_POST["fname"]);
		if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
			$fnameErr = "Only letters and white space allowed";
		}
	}

	if (empty($_POST["lname"])) {
		$lname = "";
	} else {
		$lname = test_input($_POST["lname"]);
		if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
			$lnameErr = "Only letters and white space allowed";
		}
	}

	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format";
		}
	}

	if (empty($_POST["phone"])) {
		$phoneErr = "Phone is required";
	} else {
		$phone = test_input($_POST["phone"]);
	}

	if (empty($_POST["message"])) {
		$messageErr = "Message is required";
	} else {
		$message = test_input($_POST["message"]);
		if (!preg_match("/^[a-zA-Z-' ]*$/", $message)) {
			$messageErr = "Only letters and white space allowed";
		}
	}

	if ($stmt->execute()) {
		echo '<div class="message message-green">Message sent successfully!</div>';
		// Start with PHPMailer class
		require_once './vendor/autoload.php';
		// create a new object
		$mail = new PHPMailer();
		// configure an SMTP
		$mail->isSMTP();
		$mail->Host = 'live.smtp.mailtrap.io';
		$mail->SMTPAuth = true;
		$mail->Username = 'api';
		$mail->Password = 'f1674a87c6825ce110e478eadde89a92';
		$mail->Port = 587;

		$mail->setFrom('smtp@mailtrap.io', 'api');
		$mail->addAddress('dejfsutcliffe@gmail.com', 'Dominic Sutcliffe');
		$mail->Subject = 'Message from Portfolio';
		// Set HTML 
		$mail->isHTML(false);
		$mail->Body = $message;

		// send the message
		if (!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo 'Message has been sent';
		}
	} else {
		echo '<div class="message message-red">Error: ' . $stmt->error . '</div>';
	}

	$stmt->close();
	$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Portfolio | Dominic Sutcliffe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Dominic Sutcliffe Web Developer's online portfolio Index page" />
	<link rel="stylesheet" href="css/styles.css" />
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
		media="print" onload="this.media='all'" />
	<noscript>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
			rel="stylesheet" type="text/css" />
	</noscript>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"
		integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous" defer></script>
	<script src="script.js" defer></script>
</head>

<body onresize="burgerForceclose()">
	<?php include 'php/header.php'; ?>

	<main>
		<!-- container for splash img -->
		<div id="splash">
			<h1 id="type1">Dominic Sutcliffe</h1>
			<h2 id="type2">Web Developer</h2>
			<h3><a href="#projects">Scroll Down</a></h3>
			<span id="icn-down"></span>
			<picture>
				<source type="image/webp" media="(min-width: 1200px)" srcset="img/webp/large/splash.webp" />
				<source type="image/png" media="(min-width: 1200px)" srcset="img/png/large/splash.png" />
				<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/medium/splash.webp" />
				<source type="image/png" media="(min-width: 768px)" srcset="img/png/medium/splash.png" />
				<source type="image/webp" srcset="img/webp/small/splash.webp" />
				<img alt="stylish splash image" src="img/png/small/splash.png" width="1920px" height="1080px" />
			</picture>
		</div>

		<!-- container for projects -->
		<div id="projects">
			<div>
				<picture>
					<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/small/project-1.webp" />
					<source type="image/png" media="(min-width: 768px)" srcset="img/png/small/project-1.png" />
					<source type="image/webp" srcset="img/webp/medium/project-1.webp" />
					<img alt="screenshot of replica Netmatters homepage" src="img/png/medium/project-1.png" width="1440"
						height="810" />
				</picture>
				<h2>Netmatters Homepage</h2>
				<h3>
					<a class="link" href="projects.html#project-1">View Project</a>
				</h3>
			</div>

			<div>
				<picture>
					<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/small/project-2.webp" />
					<source type="image/png" media="(min-width: 768px)" srcset="img/png/small/project-2.png" />
					<source type="image/webp" srcset="img/webp/medium/project-2.webp" />
					<img alt="screenshot of current webpage" src="img/png/medium/project-2.png" width="1440"
						height="810" />
				</picture>
				<h2>Portfolio</h2>
				<h3>
					<a class="link" href="projects.html#project-2">View Project</a>
				</h3>
			</div>

			<div>
				<picture>
					<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/small/project-3.webp" />
					<source type="image/png" media="(min-width: 768px)" srcset="img/png/small/project-3.png" />
					<source type="image/webp" srcset="img/webp/medium/project-3.webp" />
					<img alt="placeholder project image" src="img/png/medium/project-3.png" width="1440" height="810" />
				</picture>
				<h2>Management Dashboard</h2>
				<h3>
					<a class="link" href="projects.html#project-3">View Project</a>
				</h3>
			</div>

			<div>
				<picture>
					<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/small/project-4.webp" />
					<source type="image/png" media="(min-width: 768px)" srcset="img/png/small/project-4.png" />
					<source type="image/webp" srcset="img/webp/medium/project-4.webp" />
					<img alt="placeholder project image" src="img/png/medium/project-4.png" width="1440" height="810" />
				</picture>
				<h2>Javascript Pacman</h2>
				<h3>
					<a class="link" href="projects.html#project-4">View Project</a>
				</h3>
			</div>

			<div>
				<picture>
					<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/small/project-ex.webp" />
					<source type="image/png" media="(min-width: 768px)" srcset="img/png/small/project-ex.png" />
					<source type="image/webp" srcset="img/webp/medium/project-ex.webp" />
					<img alt="placeholder project image" src="img/png/medium/project-ex.png" width="1440"
						height="810" />
				</picture>
				<h2>TBA</h2>
				<h3>
					<a class="link" href="projects.html#project-5">View Project</a>
				</h3>
			</div>

			<div>
				<picture>
					<source type="image/webp" media="(min-width: 768px)" srcset="img/webp/small/project-ex.webp" />
					<source type="image/png" media="(min-width: 768px)" srcset="img/png/small/project-ex.png" />
					<source type="image/webp" srcset="img/webp/medium/project-ex.webp" />
					<img alt="placeholder project image" src="img/png/medium/project-ex.png" width="1440"
						height="810" />
				</picture>
				<h2>TBA</h2>
				<h3>
					<a class="link" href="projects.html#project-6">View Project</a>
				</h3>
			</div>
		</div>

		<!-- container for form -->
		<div id="contact">
			<div id="get-contact">
				<h1>Get In Touch</h1>
				<p>
					I'd love to hear from fellow developers seeking to
					collaborate or prospective employers who are interested
					in my skills.
				</p>
				<ul>
					<li>07713136016</li>
					<li>dejfsutcliffe@gmail.com</li>
				</ul>
				<p>
					Contact me here and I will respond as soon as possible.
				</p>
			</div>

			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<div>
					<label for="fname" class="required">First Name:</label>
					<input type="text" name="fname" id="fname" placeholder="First Name..."
						value="<?php echo $fname; ?>" />
					<small id="fname-check">Name is missing</small>
					<span class="error">* <?php echo $fnameErr; ?></span>
				</div>
				<div>
					<label for="lname">Last Name:</label>
					<input type="text" name="lname" id="lname" placeholder="Last Name..."
						value="<?php echo $lname; ?>" />
					<span class="error">* <?php echo $lnameErr; ?></span>
				</div>
				<div>
					<label for="email" class="required">Email Address:</label>
					<input type="text" name="email" id="email" placeholder="Email Address..."
						value="<?php echo $email; ?>" />
					<small id="email-check">Email must be valid</small>
					<span class="error">* <?php echo $emailErr; ?></span>
				</div>
				<div>
					<label for="phone" class="required">Phone Number:</label>
					<input type="text" name="phone" id="phone" placeholder="Phone Number..."
						value="<?php echo $phone; ?>" />
					<small id="phone-check">Phone Number must be valid</small>
					<span class="error">* <?php echo $phoneErr; ?></span>
				</div>
				<div>
					<label for="message" class="required">Your Message:</label>
					<textarea name="message" id="message" placeholder="Your Message..."
						value="<?php echo $message; ?>"></textarea>
					<small id="message-check">Message is missing</small>
					<span class="error">* <?php echo $messageErr; ?></span>
				</div>
				<input id="submit" type="submit" value="Submit" onclick="formValidate()" />
			</form>
		</div>

		<!-- container for return -->
		<div id="return">
			<span id="icn-up"></span>
			<a href="#top">Back To Top</a>
		</div>
	</main>

	<?php include 'php/footer.php'; ?>
</body>

</html>