<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Hydrator\HydratorException;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\Query\Query;
use Doctrine\ODM\MongoDB\UnitOfWork;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class AppDocumentGroupHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate(object $document, array $data, array $hints = array()): array
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id']) || (! empty($this->class->fieldMappings['id']['nullable']) && array_key_exists('_id', $data))) {
            $value = $data['_id'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['id']['type'];
                $return = $value instanceof \MongoDB\BSON\ObjectId ? (string) $value : $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['status']) || (! empty($this->class->fieldMappings['status']['nullable']) && array_key_exists('status', $data))) {
            $value = $data['status'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['status']['type'];
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['status']->setValue($document, $return);
            $hydratedData['status'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['authors']) || (! empty($this->class->fieldMappings['authors']['nullable']) && array_key_exists('authors', $data))) {
            $value = $data['authors'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['authors']['type'];
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['authors']->setValue($document, $return);
            $hydratedData['authors'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['createdAt'])) {
            $value = $data['createdAt'];
            if ($value === null) { $return = null; } else { $return = \Doctrine\ODM\MongoDB\Types\DateType::getDateTime($value); }
            $this->class->reflFields['createdAt']->setValue($document, clone $return);
            $hydratedData['createdAt'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['reservationDate'])) {
            $value = $data['reservationDate'];
            if ($value === null) { $return = null; } else { $return = \Doctrine\ODM\MongoDB\Types\DateType::getDateTime($value); }
            $this->class->reflFields['reservationDate']->setValue($document, clone $return);
            $hydratedData['reservationDate'] = $return;
        }

        /** @Many */
        $mongoData = isset($data['guests']) ? $data['guests'] : null;

        if ($mongoData !== null && ! is_array($mongoData)) {
            throw HydratorException::associationTypeMismatch('App\Document\Group', 'guests', 'array', gettype($mongoData));
        }

        $return = $this->dm->getConfiguration()->getPersistentCollectionFactory()->create($this->dm, $this->class->fieldMappings['guests']);
        $return->setHints($hints);
        $return->setOwner($document, $this->class->fieldMappings['guests']);
        $return->setInitialized(false);
        if ($mongoData) {
            $return->setMongoData($mongoData);
        }
        $this->class->reflFields['guests']->setValue($document, $return);
        $hydratedData['guests'] = $return;
        return $hydratedData;
    }
}