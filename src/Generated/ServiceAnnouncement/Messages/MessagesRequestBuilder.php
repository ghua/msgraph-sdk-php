<?php

namespace Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages\Archive\ArchiveRequestBuilder;
use Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages\Favorite\FavoriteRequestBuilder;
use Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages\MarkRead\MarkReadRequestBuilder;
use Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages\MarkUnread\MarkUnreadRequestBuilder;
use Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages\Unarchive\UnarchiveRequestBuilder;
use Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages\Unfavorite\UnfavoriteRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ServiceUpdateMessage;
use Microsoft\Graph\Generated\Models\ServiceUpdateMessageCollectionResponse;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class MessagesRequestBuilder 
{
    /**
     * The archive property
    */
    public function archive(): ArchiveRequestBuilder {
        return new ArchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The count property
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The favorite property
    */
    public function favorite(): FavoriteRequestBuilder {
        return new FavoriteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The markRead property
    */
    public function markRead(): MarkReadRequestBuilder {
        return new MarkReadRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The markUnread property
    */
    public function markUnread(): MarkUnreadRequestBuilder {
        return new MarkUnreadRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The unarchive property
    */
    public function unarchive(): UnarchiveRequestBuilder {
        return new UnarchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unfavorite property
    */
    public function unfavorite(): UnfavoriteRequestBuilder {
        return new UnfavoriteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new MessagesRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/admin/serviceAnnouncement/messages{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * A collection of service messages for tenant. This property is a contained navigation property, it is nullable and readonly.
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
     * Create new navigation property to messages for admin
     * @param ServiceUpdateMessage $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPostRequestInformation(ServiceUpdateMessage $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * A collection of service messages for tenant. This property is a contained navigation property, it is nullable and readonly.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, ServiceUpdateMessageCollectionResponse::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to messages for admin
     * @param ServiceUpdateMessage $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function post(ServiceUpdateMessage $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPostRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, ServiceUpdateMessage::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    <?php
    
    class GetQueryParameters 
    {
        /** @var bool|null $count Include count of items */
        public ?bool $count = null;
        
        /** @var array<string>|null $expand Expand related entities */
        public ?array $expand = null;
        
        /** @var string|null $filter Filter items by property values */
        public ?string $filter = null;
        
        /** @var array<string>|null $orderby Order items by property values */
        public ?array $orderby = null;
        
        /** @var string|null $search Search items by search phrases */
        public ?string $search = null;
        
        /** @var array<string>|null $select Select properties to be returned */
        public ?array $select = null;
        
        /** @var int|null $skip Skip the first n items */
        public ?int $skip = null;
        
        /** @var int|null $top Show only the first n items */
        public ?int $top = null;
        
    }
}
