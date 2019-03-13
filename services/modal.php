
<script>
    function showModal() {
        document.getElementById("contact-modal").setAttribute("style", "display:flex;");
        document.getElementById("body").setAttribute("style", "overflow:hidden;");
    }

    function hideModal() {
        document.getElementById("contact-modal").setAttribute("style", "display:none;");
        document.getElementById("body").setAttribute("style", "overflow:show;");
    }
</script>
   <style>
    
    .modal5{
/*        border:4px solid black;*/
        width:100%;
        display:flex;
        padding-top:1.5rem;
        padding-bottom:1.5rem;
        background:url('../images/services/bg2.svg');
        background-repeat: no-repeat;
        background-size: cover;
        /*
        padding-top:2rem;
        padding-bottom:2rem;
*/
    }
    .modal5 .left{
/*        border:1px solid black;*/
        width:60%;
        padding-left:10%;
        font-size:2rem;
        display:flex;
        justify-content:flex-end;
        align-items:center;
        color:#e0e0e0;
        padding-right:10%;
    }
    .modal5 .right{
/*        border:1px solid black;*/
        width:40%;
        display:flex;
        align-items:center;
        font-size:1rem;
    }
    .modal5 .right button{
        padding-top:0.5rem;
        padding-bottom:0.5rem;
        padding-left:2rem;
        padding-right:2rem;
    }
    .contact-modal{
        height:100%;
        width:100%;
        position:fixed;
        z-index:999;
/*        background-color:rgba( 0, 0, 0, 0.803);*/
/*        display:flex;*/
        display:none;
        justify-content: center;
        align-items:center;
/*        border:2px solid red;*/
    }
    .modal-background{
        width:100%;
        height:100%;
        background-color:rgba( 0, 0, 0, 0.803);
        position:absolute;
        z-index:1;
    }
    .contact-modal .cform{
/*        border:3px solid red;*/
/*        height:70%;*/
        width:40%;
        background-color:white;
        display:flex;
        flex-wrap:wrap;
        justify-content:flex-start;
        border-radius:10px;
        padding-top:1rem;
        padding-bottom:1rem;
        z-index:2;
/*        padding:1rem;*/
/*        padding-top:2rem;
        n */
    }
    .cform .formtitle{
        width:100%;
        font-size:2rem;
        color:black;    
        text-align:center;    
    }
    .cform .formdesc{
        width:100%;
        font-size:0.9rem;
        text-align:center;
        color:black;
    }
    .forminputs-wrapper{
/*        border:3px solid black;*/
        width:100%;
        display:flex;
        flex-wrap:wrap;
        justify-content: center;
/*        padding-left:10%;*/
    }
    .forminputs-container{
/*         border:3px solid red;*/
        width:100%;
        display:flex;
        flex-wrap:wrap;
        padding-top:1.5rem;
    }
    .form-border{
        border:1px solid #eaeaea;
        font-size:1rem;
        padding-left:0.5rem;
        padding-right:0.5rem;
    }
    .form-border p{
/*        border:1px solid black;*/
        font-size:0.8rem;
        padding-top:0.2rem;
        margin-bottom:0px;
        color:#717173;
        font-weight:600;
    }
    .form-border input{
        width:100%;
        height:2rem;
        bordeR:0;
/*        font-weight: 600;*/
/*        bordeR:1px solid red;*/
    }
    input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
      color: rgba( 198, 198, 198, 0.708 );
/*        font-weight: 500;*/
    }
    input::-moz-placeholder { /* Firefox 19+ */
      color: rgba( 198, 198, 198, 0.708 );
    }
    input:-ms-input-placeholder { /* IE 10+ */
      color: rgba( 198, 198, 198, 0.708 );
    }
    input:-moz-placeholder { /* Firefox 18- */
      color: rgba( 198, 198, 198, 0.708 );
    }
    input:focus::-webkit-input-placeholder { /* Chrome/Opera/Safari */
      color: rgba( 96, 96, 96, 0.708 );
/*        font-weight: 600;*/
    }
    input:focus::-moz-placeholder { /* Firefox 19+ */
      color: rgba( 96, 96, 96, 0.708 );
    }
    input:focus:-ms-input-placeholder { /* IE 10+ */
      color: rgba( 96, 96, 96, 0.708 );
    }
    input:focus:-moz-placeholder { /* Firefox 18- */
      color: rgba( 96, 96, 96, 0.708 );
    }
    .form-border input:focus{
        outline: none;
    }
    .form-border textarea:focus{
        outline: none;
    }
    .form-border:nth-child(1){
        width:100%;
    }
    .form-border:nth-child(2){
        width:50%;
    }
    .form-border:nth-child(3){
        width:50%;
    }
    .form-border:nth-child(4){
        width:55%;
    }
    .form-border:nth-child(5){
        width:45%;
    }
    .form-border:nth-child(6){
        width:100%;
    }
    .form-border:nth-child(6) textarea{
        width:100%;
        border:0;resize: none;
    }
    .form-border:last-of-type{
        width:100%;
        bordeR:0;
        text-align:center;
        padding-top:1rem;
        padding-bottom:0.5rem;
    }
    .form-border:last-of-type button{
        margin-left:0.5rem;
        margin-right:0.5rem;
        padding-left:1rem;
        padding-right:1rem;
    }
</style>

            <div class="modal5">
                <div class="left">Ready to get started?</div>
                <div class="right"><button type="button" class="btn btn-success" onclick="showModal()">Contact our Sales Team</button></div>
            </div>
            <div class="contact-modal" id="contact-modal">
                <div class="modal-background" onclick="hideModal()"></div>
                <div class="cform">
                    <div class="formtitle">Get In touch With Us!</div>
                    <div class="formdesc">Feel free to drop us a comment or inquiry and we'll get back to you as soon as possible.</div>
                    <div class="forminputs-wrapper">
                        <div class="forminputs-container">
                            <div class="form-border">
                                <p>Full Name</p>
                                <input type="text" id="fullname" class="textbox" placeholder="Enter your Full Name" autocomplete="off">
                            </div>
                            <div class="form-border">
                                <p>Company</p>
                                <input type="text" id="company" class="company" placeholder="Enter your Company Name" autocomplete="off">
                            </div>
                            <div class="form-border">
                                <p>Designation</p>
                                <input type="text" id="desig" class="desig" placeholder="Enter Position in Company" autocomplete="off">
                            </div>
                            <div class="form-border">
                                <p>Email Address</p>
                                <input type="text" id="email" class="textbox" placeholder="Enter your Email Address" autocomplete="off">
                            </div>
                            <div class="form-border">
                                <p>Phone Number</p>
                                <input type="text" id="contactno" class="contactno" placeholder="Enter your Contact Number" autocomplete="off">
                            </div>
                            <div class="form-border">
                                <p>Message</p>
                                <textarea name="message" id="message" cols="" rows="4" placeholder="Enter your message" maxlength="255"></textarea>
                            </div>
                            <div class="form-border">
                                <button type="button" class="btn btn-success" onclick="hideModal()"><i class="far fa-share-square"></i>&nbsp;&nbsp;Submit</button>
                                <button type="button" class="btn btn-danger" onclick="hideModal()"><i class="fas fa-ban"></i>&nbsp;&nbsp;Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>