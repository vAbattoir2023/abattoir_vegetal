<?php

namespace MongoDBODMProxies\__PM__\App\Document\User;

class Generatedb9195eb1ee348fbf02d2e9a6393f8caf extends \App\Document\User implements \ProxyManager\Proxy\GhostObjectInterface
{
    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc420a = null;

    /**
     * @var bool tracks initialization status - true while the object is initializing
     */
    private $initializationTracker430d3 = false;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesff283 = [
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
    private static $privatePropertiesf0bc3 = [
        
    ];

    /**
     * @var string[][] declaring class name of defined protected properties, indexed by
     * property name
     */
    private static $protectedProperties313ba = [
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
    private function callInitializerbdc7a($methodName, array $parameters)
    {
        if ($this->initializationTracker430d3 || ! $this->initializerc420a) {
            return;
        }

        $this->initializationTracker430d3 = true;

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



        $result = $this->initializerc420a->__invoke($this, $methodName, $parameters, $this->initializerc420a, $properties);
        isset($nonReferenceableProperties->email) && $this->email = $nonReferenceableProperties->email;
        isset($nonReferenceableProperties->password) && $this->password = $nonReferenceableProperties->password;
        $this->initializationTracker430d3 = false;

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

        $instance->initializerc420a = $initializer;

        return $instance;
    }

    public function & __get($name)
    {
        $this->initializerc420a && ! $this->initializationTracker430d3 && $this->callInitializerbdc7a('__get', array('name' => $name));

        if (isset(self::$publicPropertiesff283[$name])) {
            return $this->$name;
        }

        if (isset(self::$protectedProperties313ba[$name])) {
            if ($this->initializationTracker430d3) {
                return $this->$name;
            }

            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties313ba[$name];

            if ($object instanceof $expectedType) {
                return $this->$name;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return $this->$name;
            }
        } elseif (isset(self::$privatePropertiesf0bc3[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesf0bc3[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $class);

                return $accessor($this);
            }

            if ($this->initializationTracker430d3 || 'ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesf0bc3[$name]);
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
        $this->initializerc420a && $this->callInitializerbdc7a('__set', array('name' => $name, 'value' => $value));

        if (isset(self::$publicPropertiesff283[$name])) {
            return ($this->$name = $value);
        }

        if (isset(self::$protectedProperties313ba[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties313ba[$name];

            if ($object instanceof $expectedType) {
                return ($this->$name = $value);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return ($this->$name = $value);
            }
        } elseif (isset(self::$privatePropertiesf0bc3[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesf0bc3[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $class);

                return $accessor($this, $value);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesf0bc3[$name]);
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
        $this->initializerc420a && $this->callInitializerbdc7a('__isset', array('name' => $name));

        if (isset(self::$publicPropertiesff283[$name])) {
            return isset($this->$name);
        }

        if (isset(self::$protectedProperties313ba[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties313ba[$name];

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

            if (isset(self::$privatePropertiesf0bc3[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesf0bc3[$name]);
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
        $this->initializerc420a && $this->callInitializerbdc7a('__unset', array('name' => $name));

        if (isset(self::$publicPropertiesff283[$name])) {
            unset($this->$name);

            return;
        }

        if (isset(self::$protectedProperties313ba[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties313ba[$name];

            if ($object instanceof $expectedType) {
                unset($this->$name);

                return;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                unset($this->$name);

                return;
            }
        } elseif (isset(self::$privatePropertiesf0bc3[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesf0bc3[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesf0bc3[$name]);
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
        $this->initializerc420a && $this->callInitializerbdc7a('__clone', []);
    }

    public function __sleep()
    {
        $this->initializerc420a && $this->callInitializerbdc7a('__sleep', []);

        return array_keys((array) $this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc420a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc420a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc420a && $this->callInitializerbdc7a('initializeProxy', []);
    }

    public function isProxyInitialized() : bool
    {
        return ! $this->initializerc420a;
    }
}
