<?php include 'add_event.php';?>
<html>

<body>

	<form action="add_event.php" id="event" method="post">
								
				<div class="field field_name">
					<label for="contactName"><h3>Event Name</h3></label>
					<input type="text" name="event_name" id="event_name" value="" class="txt requiredField" />
									</div>

				<div class="field field_name">
					<label for="contactName"><h3>Event Heading</h3></label>
					<input type="text" name="event_heading" id="event_heading" value="" class="txt requiredField" />
									</div>


				<div class="field">
					<label for="email field_email"><h3>Event Date</h3></label>
					<input type="date" name="event_date" id="event_date" value="" class="txt requiredField" />
									</div>

				<div class="field field_message">
					<label for="commentsText"><h3>Event Content</h3></label>
					<textarea name="event_content" id="event_content" rows="20" cols="30" class="requiredField"></textarea>
									</div>
				<div class="field field_name">
					<label for="image"><h3>Event Image</h3></label>
					<input type="text" name="event_image" id="event_image" value="" class="txt requiredField" />
									</div>
				<div class="field field_submit">
					<input type="hidden" name="contact_submit" id="contact_submit" value="true" />
					<input type="submit" value="Submit" />
				</div>
			</form>


		</body>
		</html>