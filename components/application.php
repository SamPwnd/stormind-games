<?php 

/* $application = [
    'classes' => 'application',
    'text_panel' => [
        'classes' => 'text-panel text-panel--small-title text-panel--black',
        'title' => 'FUNCTIONAL TESTER',
    ],
]; */
?>

<button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">SEND APPLICATION</button>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <?php get_template_part('./components/text-panel.php', ['content' => $content['text_panel']]); ?>
        <p class="modal-title" id="staticBackdropLabel"><?= $content['title'] ?></p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="#">
            <div class="application__form-group">
                <p class="application__subtitle">PERSONAL INFORMATION</p>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="input-group mb-3 bg-primary">
                            <input type="text" class="form-control" placeholder="First name*">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="input-group mb-3 bg-primary">
                            <input type="text" class="form-control" placeholder="Last name*">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="input-group mb-3 bg-primary">
                            <input type="text" class="form-control" placeholder="City*">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="input-group mb-3 bg-primary">
                            <input type="text" class="form-control" placeholder="Phone*">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="input-group mb-3 bg-primary">
                            <input type="text" class="form-control" placeholder="E-mail address*">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="application__form-group">
                <p class="application__subtitle">NETWORK</p>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="input-group mb-3 bg-primary">
                            <input type="text" class="form-control" placeholder="Linkedin Profile">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="input-group mb-3 bg-primary">
                            <input type="text" class="form-control" placeholder="Website">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="application__form-group">
                <p class="application__subtitle">YOUR MESSAGE</p>
                <div class="row">
                    <div class="col-12">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Let us know more about your interest in working with us!"></textarea>
                    </div>
                </div>
            </div>
            
            <div class="application__form-group application__form-group--footer">
                <p class="application__subtitle">ATTACH CV / RESUME</p>
                <div class="row">
                    <div class="col-12 col-lg-6">
                    <label for="file-upload" class="input-file-label"><img src="./assets/icon-add.svg" alt=""> BROWSE ATTACHED</label>
                    <input id="file-upload" class="input-file" type="file"/>
                    </div>
                    <div class="modal__submit-div">
                        <button type="submit" class="btn btn-outline-black" data-bs-dismiss="modal">SEND APPLICATION</button>
                    </div>
                </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>