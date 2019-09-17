<?php include("header.php"); ?>

  <div id="pics">
    <p><img src="images/cat.jpg" alt="cat" width="200" height="137"></p>
    <p><img src="images/house.jpg" alt="house" width="200" height="142"></p>
    <p><img src="images/barndoor.jpg" alt="barn" width="200" height="136"></p>
    <p>&nbsp;</p>
  </div>
  <div id="content">

<p><b>Please contact us if you would like
more information.</b></p>

<p>* = Required.</p>

    	  <form method="post" action="contact_us2.php">

		  <!-- DO NOT change ANY of the php sections -->
		  <?php
		  $ipi = getenv("REMOTE_ADDR");
		  $httprefi = getenv ("HTTP_REFERER");
		  $httpagenti = getenv ("HTTP_USER_AGENT");
		  ?>

		  <input type="hidden" name="ip" value="<?php echo $ipi ?>" />
		  <input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
		  <input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />


		  <p align="justify">
		  * Your Name:<br />
		  <input type="text" name="visitor" size="35" />
		  </p>

		  <p align="justify">
		  * Your Email:<br />
		  <input type="text" name="visitormail" size="35" />
		  </p>

	      <p align="justify">
		  * Message:<br />
		  <textarea name="notes" rows="10" cols="32"></textarea>
		  </p>
              <p align="justify">How did you find us?<br>
                      <select size="1" name="D1">
		      <option>Please Select</option>
		      <option value="Search Engine">Search Engine</option>
	              <option value="Word of Mouth">Word of Mouth</option>
	              <option value="Return Visitor">Return Visitor</option>
	              <option value="Other">Other</option>
	         </select>
	      </p>

	<br>
		  <p align="center">
		  <input type="submit" value="Send Mail" />
		  </p>

	  </form>

<p><b>Michael J. Flint - VAT Specialist</b></p>

<p>16 Paynsbridge Way,<br>
Horam<br>
Heathfield<br>
East Sussex<br>
TN21 0HQ</p>

<p>Tel/Fax: 01435 813360</p>

<p>E-mail: <a href="mailto:mjfvat@btinternet.com">mjfvat@btinternet.com</a></p>

<br>
<br>

</div>

<?php include("footer.php"); ?>