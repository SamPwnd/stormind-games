<?php

?>

<div class="<?= $accordion['classes'] ?>">
  <div class="accordion__simple">
    <p class="accordion__title"><?= $accordion['title'] ?></p>
    <div class="cross" id="crosse">
      <img src="assets/cross.svg" alt="">
    </div>
    <div id="less" class="d-none">
      <img src="assets/meno.svg" alt="">
    </div>
  </div>

  <div id="accordion__submenu" class="alt-0 d-none">
    <p><span>Job Description:</span><br>
      The functional tester is a very important member of the production team. He executes tests to ensure the user of the application will have an optimal experience. The tester helps the development team to find bugs, refine the user experience and support the development process.<br><br>

      <span>Responsibilities:</span> <br>
      Execute specific tests as required by the production team and the lead tester;
      Perform tests against the established procedures;
      Discover bugs, find clear reproductions steps and enter this information in the bug database;
      <br><br>
      <span>Qualifications Requirements:</span>
      1 year of experience in quality assurance, preferably on applications
      Possess a good knowledge of computer software and software development;
      <br><br>
      <span>Detail oriented:</span><br>
      Be articulate and a team player<br>
      Have a good understanding of spoken and written English.
    </p>

    <button class="btn btn-outline-primary">SEND APPLICATION</button>
  </div>

</div>