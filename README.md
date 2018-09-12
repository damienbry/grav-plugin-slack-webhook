# Slack Webhook

Publishes results from a form (contact, etc) to a slack channel.

## Usage

Step 1: add your incoming slack webhook endpoint in the plugin configuration
Step 2: add these two lines in your form process:

```
- slack:
    body: '{% include ''forms/data.txt.twig'' %}'
```

[See a Contact Page example from the official documentation.](https://learn.getgrav.org/forms/forms/example-form)

You need to add the slack support wherever your want in the form process.

Please be aware that form processes are computed sequentially, always trigger actions *after* the captcha verification for security purposes.

# Installation

## Using GPM (preferred):

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line). From the root of your Grav install type:

```shell
$ bin/gpm install slack-webhook
```

This will install the Slack Webhook plugin into your `/user/plugins` directory within Grav. Its files can be found under `/user/plugins/social-seo-metatags`.

## Manual Installation:

In `/user/plugins` folder, apply the following command:
```shell
git clone https://github.com/Orbmancer/grav-plugin-slack-webhook slack-webhook
```

This will clone this repository into the _slack-webhook_ folder.

## Troubleshooting

You can open a new issue if you have any troubles, and I'm reachable on twitter [@damien_bry](https://twitter.com/damien_bry).

## Contributing

Feel free to fork and submit a pull request if you want to upgrade the plugin yourself. All your suggestions are welcome.

