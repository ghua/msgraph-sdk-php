<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item\Device;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\Device;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item\Device\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item\Device\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item\Device\MemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item\Device\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item\Device\RegisteredOwners\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredOwnersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item\Device\RegisteredOwners\RegisteredOwnersRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item\Device\RegisteredUsers\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredUsersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item\Device\RegisteredUsers\RegisteredUsersRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item\Device\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceTransitiveMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Authentication\WindowsHelloForBusinessMethods\Item\Device\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DeviceRequestBuilder 
{
    /**
     * The extensions property
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The memberOf property
    */
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The registeredOwners property
    */
    public function registeredOwners(): RegisteredOwnersRequestBuilder {
        return new RegisteredOwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The registeredUsers property
    */
    public function registeredUsers(): RegisteredUsersRequestBuilder {
        return new RegisteredUsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The transitiveMemberOf property
    */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new DeviceRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user%2Did}/authentication/windowsHelloForBusinessMethods/{windowsHelloForBusinessAuthenticationMethod%2Did}/device{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property device for users
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * The registered device on which this Windows Hello for Business key resides. Supports $expand. When you get a user's Windows Hello for Business registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/windowsHelloForBusinessMethods/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property device in users
     * @param Device $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Device $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete navigation property device for users
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.authentication.windowsHelloForBusinessMethods.item.device.extensions.item collection
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension%2Did'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The registered device on which this Windows Hello for Business key resides. Supports $expand. When you get a user's Windows Hello for Business registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/windowsHelloForBusinessMethods/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Device::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.authentication.windowsHelloForBusinessMethods.item.device.memberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property device in users
     * @param Device $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Device $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.authentication.windowsHelloForBusinessMethods.item.device.registeredOwners.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredOwnersItemDirectoryObjectItemRequestBuilder
    */
    public function registeredOwnersById(string $id): MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredOwnersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredOwnersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.authentication.windowsHelloForBusinessMethods.item.device.registeredUsers.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredUsersItemDirectoryObjectItemRequestBuilder
    */
    public function registeredUsersById(string $id): MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredUsersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceRegisteredUsersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.users.item.authentication.windowsHelloForBusinessMethods.item.device.transitiveMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceTransitiveMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceTransitiveMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphGeneratedUsersItemAuthenticationWindowsHelloForBusinessMethodsItemDeviceTransitiveMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    <?php
    
    class GetQueryParameters 
    {
        /** @var array<string>|null $expand Expand related entities */
        public ?array $expand = null;
        
        /** @var array<string>|null $select Select properties to be returned */
        public ?array $select = null;
        
    }
}
