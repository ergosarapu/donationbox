<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{!! urldecode($campaign_title) !!} | {!! urldecode($payee) !!} | DonationBox.ee</title>
    @include('head')
</head>
<body class="antialiased">
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-2">
        @include('form')
        <div class="mt-8 w-1/4 mx-auto">
            <a href="/" target="_blank">
                <img class="mx-auto" src="/img/db-logo-fl.png">
            </a>
        </div>
    </div>

</div>

<script>
    function app() {
        return {
            step: 1,
            passwordStrengthText: '',
            togglePassword: false,

            password: '',
            gender: 'Male',

            checkPasswordStrength() {
                var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
                var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");

                let value = this.password;

                if (strongRegex.test(value)) {
                    this.passwordStrengthText = "Strong password";
                } else if (mediumRegex.test(value)) {
                    this.passwordStrengthText = "Could be stronger";
                } else {
                    this.passwordStrengthText = "Too weak";
                }
            }
        }
    }
</script>
</body>
</html>
