<?php

namespace Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\Analytics\AnalyticsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\Children\ChildrenRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\Children\Item\DriveItemItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\Content\ContentRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\ListItem\ListItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\Permissions\Item\PermissionItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\Permissions\PermissionsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\Subscriptions\Item\SubscriptionItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\Subscriptions\SubscriptionsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\Thumbnails\Item\ThumbnailSetItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\Thumbnails\ThumbnailsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\Versions\Item\DriveItemVersionItemRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\Versions\VersionsRequestBuilder;
use Microsoft\Graph\Generated\Models\DriveItem;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class RootRequestBuilder 
{
    /**
     * The analytics property
    */
    public function analytics(): AnalyticsRequestBuilder {
        return new AnalyticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The children property
    */
    public function children(): ChildrenRequestBuilder {
        return new ChildrenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The content property
    */
    public function content(): ContentRequestBuilder {
        return new ContentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The listItem property
    */
    public function listItem(): ListItemRequestBuilder {
        return new ListItemRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The permissions property
    */
    public function permissions(): PermissionsRequestBuilder {
        return new PermissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The subscriptions property
    */
    public function subscriptions(): SubscriptionsRequestBuilder {
        return new SubscriptionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The thumbnails property
    */
    public function thumbnails(): ThumbnailsRequestBuilder {
        return new ThumbnailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * The versions property
    */
    public function versions(): VersionsRequestBuilder {
        return new VersionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.drives.item.root.children.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemItemRequestBuilder
    */
    public function childrenById(string $id): DriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new DriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RootRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/groups/{group%2Did}/drives/{drive%2Did}/root{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property root for groups
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
     * The root folder of the drive. Read-only.
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
     * Update the navigation property root in groups
     * @param DriveItem $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(DriveItem $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property root for groups
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
     * The root folder of the drive. Read-only.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, DriveItem::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property root in groups
     * @param DriveItem $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DriveItem $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.drives.item.root.permissions.item collection
     * @param string $id Unique identifier of the item
     * @return PermissionItemRequestBuilder
    */
    public function permissionsById(string $id): PermissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permission%2Did'] = $id;
        return new PermissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.drives.item.root.subscriptions.item collection
     * @param string $id Unique identifier of the item
     * @return SubscriptionItemRequestBuilder
    */
    public function subscriptionsById(string $id): SubscriptionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subscription%2Did'] = $id;
        return new SubscriptionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.drives.item.root.thumbnails.item collection
     * @param string $id Unique identifier of the item
     * @return ThumbnailSetItemRequestBuilder
    */
    public function thumbnailsById(string $id): ThumbnailSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['thumbnailSet%2Did'] = $id;
        return new ThumbnailSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.groups.item.drives.item.root.versions.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemVersionItemRequestBuilder
    */
    public function versionsById(string $id): DriveItemVersionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItemVersion%2Did'] = $id;
        return new DriveItemVersionItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
