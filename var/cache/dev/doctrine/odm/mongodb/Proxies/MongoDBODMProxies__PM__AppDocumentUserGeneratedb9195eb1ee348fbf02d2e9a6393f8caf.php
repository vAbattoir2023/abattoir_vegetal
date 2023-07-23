<?php

namespace MongoDBODMProxies\__PM__\App\Document\User;

class Generatedb9195eb1ee348fbf02d2e9a6393f8caf extends \App\Document\User implements \ProxyManager\Proxy\GhostObjectInterface
{
    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer52551 = null;

    /**
     * @var bool tracks initialization status - true while the object is initializing
     */
    private $initializationTracker67ae1 = false;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties205bb = [
        'username' => true,
        'email' => true,
        'password' => true,
        'city' => true,
        'age' => true,
        'gender' => true,
        'image' => true,
        'job' => true,
        'description' => true,
        'diet' => true,
        'centerOfInterestPerso' => true,
        'centerOfInterest' => true,
        'roles' => true,
        'postalCode' => true,
    ];

    /**
     * @var array[][] visibility and default value of defined properties, indexed by
     * property name and class name
     */
    private static $privateProperties7f080 = [
        
    ];

    /**
     * @var string[][] declaring class name of defined protected properties, indexed by
     * property name
     */
    private static $protectedPropertiesfb525 = [
        'termsAccepted' => 'App\\Document\\User',
        'language' => 'App\\Document\\User',
        'flagIconUrl' => 'App\\Document\\User',
    ];

    private static $signatureb9195eb1ee348fbf02d2e9a6393f8caf = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czoxNzoiQXBwXERvY3VtZW50XFVzZXIiO3M6NzoiZmFjdG9yeSI7czo0NDoiUHJveHlNYW5hZ2VyXEZhY3RvcnlcTGF6eUxvYWRpbmdHaG9zdEZhY3RvcnkiO3M6MTk6InByb3h5TWFuYWdlclZlcnNpb24iO3M6NDg6InYxLjAuMTZAZWNhZGJkYzkwNTJlNGFkMDhjNjBjOGEwMjI2ODcxMmU1MDQyN2Y3YyI7czoxMjoicHJveHlPcHRpb25zIjthOjE6e3M6MTc6InNraXBwZWRQcm9wZXJ0aWVzIjthOjE6e2k6MDtzOjI6ImlkIjt9fX0=';

    /**
     * Triggers initialization logic for this ghost object
     *
     * @param string  $methodName
     * @param mixed[] $parameters
     *
     * @return mixed
     */
    private function callInitializerf896f($methodName, array $parameters)
    {
        if ($this->initializationTracker67ae1 || ! $this->initializer52551) {
            return;
        }

        $this->initializationTracker67ae1 = true;

        $this->username = '';
        $this->city = null;
        $this->age = null;
        $this->gender = null;
        $this->image = null;
        $this->job = null;
        $this->description = null;
        $this->diet = null;
        $this->centerOfInterestPerso = null;
        $this->centerOfInterest = [];
        $this->roles = [];
        $this->postalCode = null;
        $this->termsAccepted = null;
        $this->language = null;
        $this->flagIconUrl = null;


        $nonReferenceableProperties = new class() {
            public ?string $email;
            public ?string $password;
        };
        $properties = [
            'username' => & $this->username,
            'city' => & $this->city,
            'age' => & $this->age,
            'gender' => & $this->gender,
            'image' => & $this->image,
            'job' => & $this->job,
            'description' => & $this->description,
            'diet' => & $this->diet,
            'centerOfInterestPerso' => & $this->centerOfInterestPerso,
            'centerOfInterest' => & $this->centerOfInterest,
            'roles' => & $this->roles,
            'postalCode' => & $this->postalCode,
            '' . "\0" . '*' . "\0" . 'termsAccepted' => & $this->termsAccepted,
            '' . "\0" . '*' . "\0" . 'language' => & $this->language,
            '' . "\0" . '*' . "\0" . 'flagIconUrl' => & $this->flagIconUrl,
            'email' => & $nonReferenceableProperties->email,
            'password' => & $nonReferenceableProperties->password,
        ];



        $result = $this->initializer52551->__invoke($this, $methodName, $parameters, $this->initializer52551, $properties);
        isset($nonReferenceableProperties->email) && $this->email = $nonReferenceableProperties->email;
        isset($nonReferenceableProperties->password) && $this->password = $nonReferenceableProperties->password;
        $this->initializationTracker67ae1 = false;

        return $result;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->username, $instance->email, $instance->password, $instance->city, $instance->age, $instance->gender, $instance->image, $instance->job, $instance->description, $instance->diet, $instance->centerOfInterestPerso, $instance->centerOfInterest, $instance->roles, $instance->postalCode, $instance->termsAccepted, $instance->language, $instance->flagIconUrl);

        $instance->initializer52551 = $initializer;

        return $instance;
    }

    public function & __get($name)
    {
        $this->initializer52551 && ! $this->initializationTracker67ae1 && $this->callInitializerf896f('__get', array('name' => $name));

        if (isset(self::$publicProperties205bb[$name])) {
            return $this->$name;
        }

        if (isset(self::$protectedPropertiesfb525[$name])) {
            if ($this->initializationTracker67ae1) {
                return $this->$name;
            }

            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesfb525[$name];

            if ($object instanceof $expectedType) {
                return $this->$name;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return $this->$name;
            }
        } elseif (isset(self::$privateProperties7f080[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties7f080[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $class);

                return $accessor($this);
            }

            if ($this->initializationTracker67ae1 || 'ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties7f080[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer52551 && $this->callInitializerf896f('__set', array('name' => $name, 'value' => $value));

        if (isset(self::$publicProperties205bb[$name])) {
            return ($this->$name = $value);
        }

        if (isset(self::$protectedPropertiesfb525[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesfb525[$name];

            if ($object instanceof $expectedType) {
                return ($this->$name = $value);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return ($this->$name = $value);
            }
        } elseif (isset(self::$privateProperties7f080[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties7f080[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $class);

                return $accessor($this, $value);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties7f080[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $tmpClass);

                return $accessor($this, $value);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer52551 && $this->callInitializerf896f('__isset', array('name' => $name));

        if (isset(self::$publicProperties205bb[$name])) {
            return isset($this->$name);
        }

        if (isset(self::$protectedPropertiesfb525[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesfb525[$name];

            if ($object instanceof $expectedType) {
                return isset($this->$name);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType)) {
                return isset($this->$name);
            }
        } else {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties7f080[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties7f080[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            return isset($targetObject->$name);
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer52551 && $this->callInitializerf896f('__unset', array('name' => $name));

        if (isset(self::$publicProperties205bb[$name])) {
            unset($this->$name);

            return;
        }

        if (isset(self::$protectedPropertiesfb525[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesfb525[$name];

            if ($object instanceof $expectedType) {
                unset($this->$name);

                return;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                unset($this->$name);

                return;
            }
        } elseif (isset(self::$privateProperties7f080[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties7f080[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties7f080[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer52551 && $this->callInitializerf896f('__clone', []);
    }

    public function __sleep()
    {
        $this->initializer52551 && $this->callInitializerf896f('__sleep', []);

        return array_keys((array) $this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer52551 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer52551;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer52551 && $this->callInitializerf896f('initializeProxy', []);
    }

    public function isProxyInitialized() : bool
    {
        return ! $this->initializer52551;
    }
}