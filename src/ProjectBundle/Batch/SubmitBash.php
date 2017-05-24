<?php

namespace ProjctBundle\Batch;

use Enhavo\Bundle\AppBundle\Batch\AbstractBatch;


class SubmitBatch extends AbstractBatch
{
    /**
     * @param Submitable[] $resources
     */
    public function execute($resources)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        foreach($resources as $resource) {
            $message = \Swift_Message::newInstance()
                ->setSubject($resources)
                ->setFrom("praktikant@enhavobooks.dev")
                ->setReplyTo("no-reply@enhavobooks.dev")
                ->setTo($resources)
                ->setBody($resources, 'text/html');
        }
        $this->mailer->send($message);
        $em->flush();
    }

    public function setOptions($parameters)
    {
        parent::setOptions($parameters);

        $this->options = array_merge($this->options, [
            'label' => isset($parameters['label']) ? $parameters['label'] : 'batch.submit.label',
            'confirmMessage' => isset($parameters['confirmMessage']) ? $parameters['confirmMessage'] : 'batch.submit.message.confirm',
            'translationDomain' => isset($parameters['translationDomain']) ? $parameters['translationDomain'] : 'EnhavoContentBundle',
        ]);
    }

    public function getType()
    {
        return 'publish';
    }
}