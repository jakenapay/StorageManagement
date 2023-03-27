<?php
if (isset($_GET['m'])) {
    $errorMsg = '';
    switch ($_GET['m']) {
        case 'ef':
            $errorMsg = 'Empty fields';
            break;
        case 'wp':
            $errorMsg = 'Wrong password';
            break;
        case 'ia':
            $errorMsg = 'Inactive account';
            break;
        case 'unf':
            $errorMsg = 'User not found';
            break;
        case 'ie':
            $errorMsg = 'Invalid email';
            break;

        default:
            $errorMsg = 'Unknown error';
            break;
    }

    // Create the error message HTML
    $errorHTML = '<div id="error-msg-box">';
    $errorHTML .= '<p class="error-msg">' . $errorMsg . '</p>';
    $errorHTML .= '</div>';

    echo $errorHTML;
}
