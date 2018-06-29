function validatefathername(){
                var fathername1=document.registration_form.fathername.value;
                var letters = /^[A-Za-z ]+$/;
                if(fathername1=="" || fathername1==null){
                    document.registration_form.fathername.style.border="2px solid red";
                    document.getElementById("errorfathername").style.display="block";
                    return false;
                }
                else if (!fathername1.match(letters)) {
                    document.registration_form.name.style.border="2px solid red";
                    document.getElementById("errorfathername1").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.fathername.style.border="2px solid green";
                    document.getElementById("errorfathername").style.display="none";
                    document.getElementById("errorfathername1").style.display="none";
                    return true;
                }
            }

            function validatemothername(){
                var mothername1=document.registration_form.mothername.value;
                var letters = /^[A-Za-z ]+$/;
                if(mothername1=="" || mothername1==null){
                    document.registration_form.mothername.style.border="2px solid red";
                    document.getElementById("errormothername").style.display="block";
                    return false;
                }
                else if (!mothername1.match(letters)) {
                    document.registration_form.mothername.style.border="2px solid red";
                    document.getElementById("errormothername1").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.mothername.style.border="2px solid green";
                    document.getElementById("errormothername").style.display="none";
                    document.getElementById("errormothername1").style.display="none";
                    return true;
                }
            }


             function validatenationality() {
                var nationality1=document.registration_form.nationality.value;
                if(nationality1=="select nationality"){
                    document.registration_form.nationality.style.border="2px solid red";
                    document.getElementById("errornationality").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.nationality.style.border="2px solid green";
                    document.getElementById("errornationality").style.display="none";
                    return true;
                }
            }

function validatemothertongue() {
                var mothertongue1=document.registration_form.mothertongue.value;
                if(mothertongue1=="select Mother tongue"){
                    document.registration_form.mothertongue.style.border="2px solid red";
                    document.getElementById("errormothertongue").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.mothertongue.style.border="2px solid green";
                    document.getElementById("errormothertongue").style.display="none";
                    return true;
                }
            }
function validatepresentaddress() {
                var presentaddress1=document.registration_form.presentaddress.value;
                if(presentaddress1==""){
                    document.registration_form.presentaddress.style.border="2px solid red";
                    document.getElementById("erroraddress1").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.presentaddress.style.border="2px solid green";
                    document.getElementById("erroraddress1").style.display="none";
                    return true;
                }
            }
            function validatepermanentaddress() {
                var permanentaddress1=document.registration_form.permanentaddress.value;
                if(permanentaddress1==""){
                    document.registration_form.permanentaddress.style.border="2px solid red";
                    document.getElementById("erroraddress2").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.permanentaddress.style.border="2px solid green";
                    document.getElementById("erroraddress2").style.display="none";
                    return true;
                }
            }


            function validatehobbies() {
                var hobbies1=document.registration_form.hobbies.value;
                if(hobbies1==""){
                    document.registration_form.hobbies.style.border="2px solid red";
                    document.getElementById("errorhobbies").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.hobbies.style.border="2px solid green";
                    document.getElementById("errorhobbies").style.display="none";
                    return true;
                }
            }

            function validatetenthboardname() {
                var tenthboardname1=document.registration_form.tenthboardname.value;
                if(tenthboardname1==""){
                    document.registration_form.tenthboardname.style.border="2px solid red";
                    document.getElementById("errortenthboardname").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.tenthboardname.style.border="2px solid green";
                    document.getElementById("errortenthboardname").style.display="none";
                    
                    return true;
                }
            }

                function validatetenthschoolname() {
                var tenthschoolname1=document.registration_form.tenthschoolname.value;
                if(tenthschoolname1==""){
                    document.registration_form.tenthschoolname.style.border="2px solid red";
                    document.getElementById("errortenthschoolname").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.tenthschoolname.style.border="2px solid green";
                    document.getElementById("errortenthschoolname").style.display="none";
                    return true;
                }
            }

                function validatetwelvethboardname() {
                var twelvethboardname1=document.registration_form.twelvethboardname.value;
                if(twelvethboardname1==""){
                    document.registration_form.twelvethboardname.style.border="2px solid red";
                    document.getElementById("errortwelvethboardname").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.twelvethboardname.style.border="2px solid green";
                    document.getElementById("errortwelvethboardname").style.display="none";
                    return true;
                }
            }

                function validatetwelvethschoolname() {
                var twelvethschoolname1=document.registration_form.twelvethschoolname.value;
                if(twelvethschoolname1==""){
                    document.registration_form.twelvethschoolname.style.border="2px solid red";
                    document.getElementById("errortwelvethschoolname").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.twelvethschoolname.style.border="2px solid green";
                    document.getElementById("errortwelvethschoolname").style.display="none";
                    return true;
                }
            }

            function validatetenthpercentage() {
                var tenthpercentage1=document.registration_form.tenthpercentage.value;
                if(tenthpercentage1==""){
                    document.registration_form.tenthpercentage.style.border="2px solid red";
                    document.getElementById("errortenthpercentage").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.tenthpercentage.style.border="2px solid green";
                    document.getElementById("errortenthpercentage").style.display="none";
                    return true;
                }
            }

            function validatetwelvethpercentage() {
                var twelvethpercentage1=document.registration_form.twelvethpercentage.value;
                if(twelvethpercentage1==""){
                    document.registration_form.twelvethpercentage.style.border="2px solid red";
                    document.getElementById("errortwelvethpercentage").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.twelvethpercentage.style.border="2px solid green";
                    document.getElementById("errortwelvethpercentage").style.display="none";
                    return true;
                }
            }


            function validatetenthyear() {
                var tenthpassing1=document.registration_form.tenthpassing.value;
                if(tenthpassing1=="Select Year"){
                    document.registration_form.tenthpassing.style.border="2px solid red";
                    document.getElementById("errortenthyear").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.tenthpassing.style.border="2px solid green";
                    document.getElementById("errortenthyear").style.display="none";
                    return true;
                }
            }


            function validatetwelvethyear() {
                var twelvethyear1=document.registration_form.twelvethpassing.value;
                if(twelvethyear1=="Select Year"){
                    document.registration_form.twelvethpassing.style.border="2px solid red";
                    document.getElementById("errortwelvethyear").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.twelvethpassing.style.border="2px solid green";
                    document.getElementById("errortwelvethyear").style.display="none";
                    return true;
                }
            }


            function validatecgpa() {
                var cgpa1=document.registration_form.cgpa.value;
                if(cgpa1==" "){
                    document.registration_form.cgpa.style.border="2px solid red";
                    document.getElementById("errorcgpa").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.cgpa.style.border="2px solid green";
                    document.getElementById("errorcgpa").style.display="none";
                    return true;
                }
            }

            function validatelanguages() {
                var languages1=document.registration_form.knownlanguages.value;
                if(languages1==" "){
                    document.registration_form.knownlanguages.style.border="2px solid red";
                    document.getElementById("errorlanguages").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.knownlanguages.style.border="2px solid green";
                    document.getElementById("errorlanguages").style.display="none";
                    return true;
                }
            }

            // function validatelanguages() {
            //     var languages1=document.getElementById('textareaid1').value;
            //     console.log(languages1);
            //     if(languages1==" "){
            //         //document.registration_form.knownlanguages.style.border="2px solid red";
            //         document.getElementById("errorlanguages").style.display="block";
            //         return false;
            //     }
            //     else{
            //         //document.registration_form.knownlanguages.style.border="2px solid green";
            //         document.getElementById("errorlanguages").style.display="none";
            //         return true;
            //     }
            // }


            function validatesoftskills() {
                var softskills1=document.registration_form.softskills.value;
                if(softskills1==" "){
                    document.registration_form.softskills.style.border="2px solid red";
                    document.getElementById("errorsoftskills").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.softskills.style.border="2px solid green";
                    document.getElementById("errorsoftskills").style.display="none";
                    return true;
                }
            }


            function validatetechnicalskills() {
                var technicalskills1=document.registration_form.technicalskills.value;
                if(technicalskills1==" "){
                    document.registration_form.technicalskills.style.border="2px solid red";
                    document.getElementById("errortechnicalskills").style.display="block";
                    return false;
                }
                else{
                    document.registration_form.technicalskills.style.border="2px solid green";
                    document.getElementById("errortechnicalskills").style.display="none";
                    return true;
                }
            }








////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////






function validatefathername1(){
                var fathername1=document.complete_form.fathername.value;
                var letters = /^[A-Za-z ]+$/;
                if(fathername1=="" || fathername1==null){
                    document.complete_form.fathername.style.border="2px solid red";
                    document.getElementById("error1fathername").style.display="block";
                    return false;
                }
                else if (!fathername1.match(letters)) {
                    document.complete_form.name.style.border="2px solid red";
                    document.getElementById("error1fathername1").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.fathername.style.border="2px solid green";
                    document.getElementById("error1fathername").style.display="none";
                    document.getElementById("error1fathername1").style.display="none";
                    return true;
                }
            }

            function validatemothername1(){
                var mothername1=document.complete_form.mothername.value;
                var letters = /^[A-Za-z ]+$/;
                if(mothername1=="" || mothername1==null){
                    document.complete_form.mothername.style.border="2px solid red";
                    document.getElementById("error1mothername").style.display="block";
                    return false;
                }
                else if (!mothername1.match(letters)) {
                    document.complete_form.mothername.style.border="2px solid red";
                    document.getElementById("error1mothername1").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.mothername.style.border="2px solid green";
                    document.getElementById("error1mothername").style.display="none";
                    document.getElementById("error1mothername1").style.display="none";
                    return true;
                }
            }


             function validatenationality1() {
                var nationality11=document.complete_form.nationality.value;
                if(nationality11=="select nationality"){
                    document.complete_form.nationality.style.border="2px solid red";
                    document.getElementById("error1nationality").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.nationality.style.border="2px solid green";
                    document.getElementById("error1nationality").style.display="none";
                    return true;
                }
            }

function validatemothertongue1() {
                var mothertongue11=document.complete_form.mothertongue.value;
                console.log(mothertongue11);
                if(mothertongue11=="select Mother tongue"){
                    document.complete_form.mothertongue.style.border="2px solid red";
                    document.getElementById("error1mothertongue").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.mothertongue.style.border="2px solid green";
                    document.getElementById("error1mothertongue").style.display="none";
                    return true;
                }
            }
function validatepresentaddress1() {
                var presentaddress1=document.complete_form.presentaddress.value;
                if(presentaddress1==""){
                    document.complete_form.presentaddress.style.border="2px solid red";
                    document.getElementById("error1address1").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.presentaddress.style.border="2px solid green";
                    document.getElementById("error1address1").style.display="none";
                    return true;
                }
            }
            function validatepermanentaddress1() {
                var permanentaddress1=document.complete_form.permanentaddress.value;
                if(permanentaddress1==""){
                    document.complete_form.permanentaddress.style.border="2px solid red";
                    document.getElementById("error1address2").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.permanentaddress.style.border="2px solid green";
                    document.getElementById("error1address2").style.display="none";
                    return true;
                }
            }


            function validatehobbies1() {
                var hobbies1=document.complete_form.hobbies.value;
                if(hobbies1==""){
                    document.complete_form.hobbies.style.border="2px solid red";
                    document.getElementById("error1hobbies").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.hobbies.style.border="2px solid green";
                    document.getElementById("error1hobbies").style.display="none";
                    return true;
                }
            }

            function validatetenthboardname1() {
                var tenthboardname1=document.complete_form.tenthboardname.value;
                if(tenthboardname1==""){
                    document.complete_form.tenthboardname.style.border="2px solid red";
                    document.getElementById("error1tenthboardname").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.tenthboardname.style.border="2px solid green";
                    document.getElementById("error1tenthboardname").style.display="none";
                    
                    return true;
                }
            }

                function validatetenthschoolname1() {
                var tenthschoolname1=document.complete_form.tenthschoolname.value;
                if(tenthschoolname1==""){
                    document.complete_form.tenthschoolname.style.border="2px solid red";
                    document.getElementById("error1tenthschoolname").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.tenthschoolname.style.border="2px solid green";
                    document.getElementById("error1tenthschoolname").style.display="none";
                    return true;
                }
            }

                function validatetwelvethboardname1() {
                var twelvethboardname1=document.complete_form.twelvethboardname.value;
                if(twelvethboardname1==""){
                    document.complete_form.twelvethboardname.style.border="2px solid red";
                    document.getElementById("error1twelvethboardname").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.twelvethboardname.style.border="2px solid green";
                    document.getElementById("error1twelvethboardname").style.display="none";
                    return true;
                }
            }

                function validatetwelvethschoolname1() {
                var twelvethschoolname1=document.complete_form.twelvethschoolname.value;
                if(twelvethschoolname1==""){
                    document.complete_form.twelvethschoolname.style.border="2px solid red";
                    document.getElementById("error1twelvethschoolname").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.twelvethschoolname.style.border="2px solid green";
                    document.getElementById("error1twelvethschoolname").style.display="none";
                    return true;
                }
            }

            function validatetenthpercentage1() {
                var tenthpercentage1=document.complete_form.tenthpercentage.value;
                if(tenthpercentage1==""){
                    document.complete_form.tenthpercentage.style.border="2px solid red";
                    document.getElementById("error1tenthpercentage").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.tenthpercentage.style.border="2px solid green";
                    document.getElementById("error1tenthpercentage").style.display="none";
                    return true;
                }
            }

            function validatetwelvethpercentage1() {
                var twelvethpercentage1=document.complete_form.twelvethpercentage.value;
                if(twelvethpercentage1==""){
                    document.complete_form.twelvethpercentage.style.border="2px solid red";
                    document.getElementById("error1twelvethpercentage").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.twelvethpercentage.style.border="2px solid green";
                    document.getElementById("error1twelvethpercentage").style.display="none";
                    return true;
                }
            }


            function validatetenthyear1() {
                var tenthpassing1=document.complete_form.tenthpassing.value;
                if(tenthpassing1=="Select Year"){
                    document.complete_form.tenthpassing.style.border="2px solid red";
                    document.getElementById("error1tenthyear").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.tenthpassing.style.border="2px solid green";
                    document.getElementById("error1tenthyear").style.display="none";
                    return true;
                }
            }


            function validatetwelvethyear1() {
                var twelvethyear1=document.complete_form.twelvethpassing.value;
                if(twelvethyear1=="Select Year"){
                    document.complete_form.twelvethpassing.style.border="2px solid red";
                    document.getElementById("error1twelvethyear").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.twelvethpassing.style.border="2px solid green";
                    document.getElementById("error1twelvethyear").style.display="none";
                    return true;
                }
            }


            function validatecgpa1() {
                var cgpa1=document.complete_form.cgpa.value;
                if(cgpa1==" "){
                    document.complete_form.cgpa.style.border="2px solid red";
                    document.getElementById("error1cgpa").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.cgpa.style.border="2px solid green";
                    document.getElementById("error1cgpa").style.display="none";
                    return true;
                }
            }

            function validatelanguages1() {
                var languages1=document.complete_form.knownlanguages.value;
                if(languages1==" "){
                    document.complete_form.knownlanguages.style.border="2px solid red";
                    document.getElementById("error1languages").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.knownlanguages.style.border="2px solid green";
                    document.getElementById("error1languages").style.display="none";
                    return true;
                }
            }

            // function validatelanguages1() {
            //     var languages1=document.getElementById('textareaid1').value;
            //     console.log(languages1);
            //     if(languages1==" "){
            //         //document.complete_form.knownlanguages.style.border="2px solid red";
            //         document.getElementById("error1languages").style.display="block";
            //         return false;
            //     }
            //     else{
            //         //document.complete_form.knownlanguages.style.border="2px solid green";
            //         document.getElementById("error1languages").style.display="none";
            //         return true;
            //     }
            // }


            function validatesoftskills1() {
                var softskills1=document.complete_form.softskills.value;
                if(softskills1==" "){
                    document.complete_form.softskills.style.border="2px solid red";
                    document.getElementById("error1softskills").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.softskills.style.border="2px solid green";
                    document.getElementById("error1softskills").style.display="none";
                    return true;
                }
            }


            function validatetechnicalskills1() {
                var technicalskills1=document.complete_form.technicalskills.value;
                if(technicalskills1==" "){
                    document.complete_form.technicalskills.style.border="2px solid red";
                    document.getElementById("error1technicalskills").style.display="block";
                    return false;
                }
                else{
                    document.complete_form.technicalskills.style.border="2px solid green";
                    document.getElementById("error1technicalskills").style.display="none";
                    return true;
                }
            }



function validatenewpassword(){
                var numeric=/(?=^.{6,}$)(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*]+)(?![.\n]).*$/;
                var password1=document.passwordform.newpassword1.value;
                if (password1.length<6) {
                    document.passwordform.newpassword1.style.border="2px solid red";
                    document.getElementById("errorpass1").style.display="none";
                    document.getElementById("errorpass2").style.display="block";
                    document.getElementById("errorpass3").style.display="none";
                    return false;
                }
                else if (!password1.match(numeric)) {
                    document.passwordform.newpassword1.style.border="2px solid red";
                    document.getElementById("errorpass1").style.display="none";
                    document.getElementById("errorpass2").style.display="none";
                    document.getElementById("errorpass3").style.display="block";
                    return false;
                }
                else{
                    document.passwordform.newpassword1.style.border="2px solid green";
                    document.getElementById("errorpass1").style.display="none";
                    document.getElementById("errorpass2").style.display="none";
                    document.getElementById("errorpass3").style.display="none";
                    return true;
                }
            }

            function validatenewconfirmpassword(){
                var password1=document.passwordform.newpassword1.value;
                var cpassword1=document.passwordform.newpassword2.value;
                if(cpassword1=="" || cpassword1==null){
                    document.passwordform.newpassword2.style.border="2px solid red";
                    document.getElementById("errorcpass1").style.display="block";
                    return false;
                }
                else if (cpassword1!=password1) {
                    document.passwordform.newpassword2.style.border="2px solid red";
                    document.getElementById("errorcpass1").style.display="none";
                    document.getElementById("errorcpass2").style.display="block";
                    return false;
                }
                else{
                    document.passwordform.newpassword2.style.border="2px solid green";
                    document.getElementById("errorcpass1").style.display="none";
                    document.getElementById("errorcpass2").style.display="none";
                    return true;
                }
            }






