// resources/js/reset-password.js
import axios from 'axios';

function toggleModal() {
    console.log('inside toggle');
    document.getElementById('modal').classList.toggle('hidden')
}

const toggleModal_btn = document.getElementById('toggleModal');
if(toggleModal_btn){
    toggleModal_btn.addEventListener('click', () => {

        toggleModal();
    });
}
const resetPasswordForm = document.getElementById('resetPasswordForm');
const messageContainer = document.getElementById('messageContainer');
const messageContainer_sendotp = document.querySelector('.messageContainer_sendotp');

function showMessage(type, message, messageContainer_msg) {
  const messageElement = document.createElement('div');
  messageElement.classList.add(`bg-${type}-100`, `border-${type}-500`, `text-${type}-700`, 'rounded', 'text-[#ff0000]');
  messageElement.textContent = message;

  messageContainer_msg.innerHTML = ''; // Clear existing messages
  messageContainer_msg.appendChild(messageElement);
}

if (resetPasswordForm) {
    resetPasswordForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(e.target);

        try {
            const response = await axios.post('/api/auth/reset-password', formData);
            showMessage('success', response.data.data.message, messageContainer);
            // Optionally, you can redirect or perform other actions here
        } catch (error) {
            showMessage('error', 'An error occurred. Please try again.', messageContainer);
            console.error(error);
        }
    });

}
// final registration step ----
const final_registration = document.getElementById('final_registration_step');

if (final_registration) {
    final_registration.addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(e.target);

        try {
       
            const response = await axios.post('/api/auth/register', formData);

            if(response.data.status == "success"){
                const  active_button_code = document.querySelector('.active_button');
                active_button_code.classList.add('hidden');

                const addSuccess = document.getElementById('final_registration_step');
                addSuccess.innerHTML = "<div><p>Enter the dashboard page !</p></div>";
                console.log('dashboard');

                showMessage('success', response.data.data.message, messageContainer);
                // Optionally, you can redirect or perform other actions here
                }else{
                    showMessage('error', response.data.data.message, messageContainer);
                }
        } catch (error) {
            showMessage('error', 'An error occurred. Please try again.', messageContainer);
            console.error(error);
        }
    });

}

document.addEventListener('DOMContentLoaded', function () {
    const verify_opt_section = document.querySelector('.verify_opt_section');
    verify_opt_section.classList.add('hidden');

    const final_registration = document.getElementById('final_registration_step');
    final_registration.classList.add('hidden');
    const btn_active = document.querySelector('.btn1_ac');
    btn_active.classList.add('active');
});


const authform = document.getElementById("authform");
if (authform) {
    authform.addEventListener('submit', async (e) => {
        console.log("authform submit");
        e.preventDefault();
        messageContainer.innerHTML = '';

        const formData = new FormData(e.target);
     
        const code = formData.get('code').trim();
        const phone = formData.get('phone').trim();
        var first_name = formData.get('first_name');
        if(first_name){
             first_name = first_name.trim();
        }
        var last_name = formData.get('last_name');
       if(last_name){
        const last_name = formData.get('last_name').trim();
       }
        const mergedPhoneNumber = `${code}${phone}`; // Merge code and phone
        console.log("mergedPhoneNumber submit", mergedPhoneNumber);

        document.querySelector("phonenumber").innerText = "";
        document.querySelector("phonenumber").innerText = mergedPhoneNumber;
        document.querySelector('#authform_popup input[name="phone"]').value = mergedPhoneNumber;

        formData.set('phone', mergedPhoneNumber);
        if(first_name){
            formData.set('first_name', first_name);
        }
        if(last_name){
            formData.set('last_name', last_name);

        }

        const add_number_new = document.getElementById('phone_number_add');
        if(add_number_new){
            add_number_new.value = mergedPhoneNumber;
        }
        try {
            const response = await axios.post('/api/auth/send-otp', formData);
            console.log(response.data);
            if(response.data.status == "success"){
              const get_form_div_section = document.getElementById('form_div_sec');
              get_form_div_section.classList.add('hidden');
              const verify_opt_section = document.querySelector('.verify_opt_section');
              verify_opt_section.classList.remove('hidden');

              var btn_active = document.querySelector('.btn1_ac');
              btn_active.classList.remove('active');
              var btn_active = document.querySelector('.btn2_ac');
              btn_active.classList.add('active');
                // toggleModal();

            }else{
    
                showMessage('error', response.data.data.message, messageContainer);
            }

            // Optionally, you can redirect or perform other actions here
        } catch (error) {
            console.log("error", error);
            if( error.response.data.data != null ||  error.response.data.data != undefined ){
                var message = error.response.data.data.message;
            }else{
                var message = error.response.data.message;
            }
            showMessage('error', message, messageContainer);
        }
    });
}

const resendOtp_class = document.querySelector('.resendOtp');
if(resendOtp_class){

    resendOtp_class.addEventListener('click', async (e) => {
        e.preventDefault();
        messageContainer_sendotp.innerHTML = "";

        const mergedPhoneNumber = document.querySelector('#authform_popup input[name="phone"]').value;

        const formData = new FormData();

        formData.set('phone', mergedPhoneNumber);
        formData.set('type', "number");
        // formData.set('first_name', first_name);
        // formData.set('last_name', last_name);

        try {
            const response = await axios.post('/api/auth/send-otp', formData);
            console.log(response.data);
            if(response.data.status == "success"){

                // toggleModal();
                console.log("sent otp");
            }else{
                showMessage('error', response.data.data.message, messageContainer_sendotp);
            }

            // Optionally, you can redirect or perform other actions here
        } catch (error) {
            console.log("error", error);
            if( error.response.data.data != null ||  error.response.data.data != undefined ){
                var message = error.response.data.data.message;
            }else{
                var message = error.response.data.message;
            }
            showMessage('error', message, messageContainer_sendotp);
        }
    });
}

const authform_popup = document.getElementById("authform_popup");
if (authform_popup) {
    authform_popup.addEventListener('submit', async (e) => {
        e.preventDefault();
        messageContainer_sendotp.innerHTML = "";

        const formData = new FormData(e.target);
        let mergedOtpNumber = '';

        for (let i = 1; i <= 6; i++) {
            mergedOtpNumber += formData.get(`otp${i}`);
        }

        formData.set('verification_code', mergedOtpNumber);

        try {
            const response = await axios.post('/api/auth/login-verifyotp', formData);
            console.log(response.data);
            if(response.data.status == "success"){
                console.log("response sucess");
                if(response.data.accessToken != undefined){
              
                    showMessage('success', "Logging in..", messageContainer_sendotp);
                }else{
                    const form_div_sec = document.getElementById('form_div_sec');
                    form_div_sec.classList.add('hidden');
                    const verify_opt_section = document.querySelector('.verify_opt_section');
                    verify_opt_section.classList.add('hidden');

                    var btn_active = document.querySelector('.btn2_ac');
                    btn_active.classList.remove('active');

                    var btn_active = document.querySelector('.btn3_ac');
                    btn_active.classList.add('active');

                    const final_registration = document.getElementById('final_registration_step');
                    final_registration.classList.remove('hidden');
                    toggleModal();
                }
            }else{
                showMessage('error', response.data.data.message, messageContainer_sendotp);
            }

            // Optionally, you can redirect or perform other actions here
        } catch (error) {
   
            console.log("error", error);
            if( error.response.data.data != null ||  error.response.data.data != undefined ){
                var message = error.response.data.data.message;
            }else{
                var message = error.response.data.message;
            }
            showMessage('error', message, messageContainer_sendotp);
        }
    });
}

const otp_automovetonextinput = document.querySelectorAll(".otp-automovetonextinput");
if(otp_automovetonextinput){
    otp_automovetonextinput.forEach((input, index, inputs) => {
        console.log("autmove", input);
        console.log("autmove", index);
        input.addEventListener("input", function() {
            const value = input.value;
            if (value.length === 1) {
                if (index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            }
        });
        input.addEventListener("keydown", function(e) {
            if (e.key === "Backspace" && input.value === "") {
                if (index > 0) {
                    inputs[index - 1].focus();
                }
            }
        });
    });
}
