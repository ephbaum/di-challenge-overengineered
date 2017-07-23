# Dealer Inspire PHP Code Challenge

## Over-engineered with Laravel

Welcome to my submission for your PHP Code Challenge using Laravel. Because I've applied for a Laravel focused position, I have chosen to use Laravel to demonstrate I have a working knowledge of Laravel. I've also used the word Laravel far too many times in this first section of this README and feel it best if we just move on, please.

## Updated Workflow

Because I have opted to over-engineer this using a full Laravel installation, I'm asking that you kindly use the following workflow for best results:

```
cd your-repo-checkout
composer install
cp .env.example .env
php artisan key:generate
```

Update your .env file with your MySQL credentials.

```
php artisan migrate
phpunit
php -S 127.0.0.1:9999 -t public
```


## Outcome

[x] Your contact form should be in valid HTML in our template. It should match the style of the template.

[x] Your back-end processing should be done in PHP. You may use a framework, or plain PHP - either is fine.

[x] Your contact form data should be validated.

[x] One copy of the data should be emailed to the owner (listed above).  You can choose either HTML or plaintext email (or a combination).

[x] One copy of the data should be kept in a MySQL, MongoDB or Postgres database.

[x] Some indication that the contact form has been sent should be given.

[x] You should have PHPUnit-compatible unit tests for your application.

[x] Provide either a database schema file or a programmatic way of creating your database / tables.

[x] The completed work is available in a public git repository for us to checkout and review.


## Caveats & Explanations

This is now a complete application for no reason except to show that I can make a complete application. I could have opted for a vanilla PHP as I would have used a couple decades ago, but I felt I would be better off showing I am capable of actually using the Laravel framework and its various components.

All front-end validation of this contact form are handled via only HTML5 `required` attribute. I chose not to implement any additional JS as it felt outside of the scope of the challenge. Back-end validation is handled by Laravel with custom messaging.

The PHPUnit test I've included is only a couple of basic feature tests with a few assertions to demonstrate understanding. I opted NOT to test email sending, for example, but instead chose to focus on two core components: That data submitted to end point would be stored, and that if data was missing when submitted, end point would return appropriate status code. I could have included a variety of Unit Tests for the model, controller, email sending, etc., but didn't want to get too bogged down on that for this challenge.

Finally, this might seem silly, but I feel it worth pointing out that I am a 2 spaces, normally with spaces in parens, kind of guy. I'm also a fan of breaking chained methods, as well as aligning I will use whatever standard the team dictates, I just have my Vim set that way by default. My apologies of this offends you.

Thank you, I look forward to hearing from you!
