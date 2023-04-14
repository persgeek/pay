<?php

return json_encode([

    /**
     * Documentation for this.
     */
    'order_id' => $this->entity->getId(),

    /**
     * Documentation for this.
     */
    'amount' => $this->entity->getAmount(),

    /**
     * Documentation for this.
     */
    'callback' => $this->entity->getBack(),
]);
