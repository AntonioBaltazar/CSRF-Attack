# CSRF Vulnerability Demonstration - Website

**Author:** Antonio BALTAZAR  
**Date:** 08/12/2023

---

## Unprotected

In the "Unprotected" section, we highlight the CSRF vulnerability by simulating an attack. When the user clicks on a pop-up at the bottom of the screen, they are redirected to a malicious page (`evil.html`) that executes a form to change the password. A button is included to inform the user that they have been redirected to a malicious page.

### Demo:

1. Access the "Unprotected" page of the site.
2. Click on the pop-up at the bottom of the screen to be redirected to `evil.html`.
3. Observe the password change without user confirmation.

---

## Protected

In the "Protected" section, we use the same page as in the "Unprotected" version, but this time there is an anti-CSRF token assigned to the user's session. The malicious pop-up can no longer successfully execute a password change request without the appropriate CSRF token.

### Demo:

1. Access the "Protected" page of the site.
2. Click on the pop-up at the bottom of the screen to be redirected to `evil.html`.
3. Note that the password change form fails due to the absence of the CSRF token.

---

## How to Run Locally

1. Clone this repository to your local machine.

    ```bash
    git clone https://github.com/your-username/your-project.git
    ```

2. Place the files in your local server (e.g., Wamp, XAMPP, MAMP).

3. Access the site through your preferred browser.

4. Explore the "Unprotected" and "Protected" sections to see the difference in CSRF attack handling.

---

**Note:**
This project is intended for educational purposes only. Do not use it for malicious purposes, and make sure to comply with applicable laws and regulations.
