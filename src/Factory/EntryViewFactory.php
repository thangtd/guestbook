<?php
namespace BlackScorp\GuestBook\Factory;

use BlackScorp\GuestBook\Entity\EntryEntity;
use BlackScorp\GuestBook\View\EntryView;

interface EntryViewFactory
{
    /**
     * @param EntryEntity $entity
     * @return EntryView
     */
    public function create(EntryEntity $entity);
}