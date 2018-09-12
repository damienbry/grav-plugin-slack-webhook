<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use Grav\Common\Grav;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class ElyiosSyntaxPlugin
 * @package Grav\Plugin
 */
class SlackWebhookPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onFormProcessed' => ['onFormProcessed', 0]
        ];
    }

    public function onFormProcessed(Event $event)
    {
        $form = $event['form'];
        $action = $event['action'];
        $params = $event['params'];
        $slackWebhook = $this->config->get('plugins.slack-webhook.webhook_url');

        if (empty($slackWebhook)) {
            return;
        }

        switch ($action) {
        case 'slack':
            //do what you want

            $content = $this->grav['twig']->processString($params['body'], ['form' => $form]);

            $client = new \GuzzleHttp\Client();
            // Send an asynchronous request.
            $response = $client->post($slackWebhook, [\GuzzleHttp\RequestOptions::JSON => [
                'text' => 'New form completed: \\n' . $content,
                'icon_emoji' => ':pencil:'
            ]]);
        }
    }
}
