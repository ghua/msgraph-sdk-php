<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\RbacApplication;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignments\Item\UnifiedRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignments\RoleAssignmentsRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignmentScheduleInstances\Item\UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignmentScheduleInstances\RoleAssignmentScheduleInstancesRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignmentScheduleRequests\Item\UnifiedRoleAssignmentScheduleRequestItemRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignmentScheduleRequests\RoleAssignmentScheduleRequestsRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignmentSchedules\Item\UnifiedRoleAssignmentScheduleItemRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignmentSchedules\RoleAssignmentSchedulesRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleDefinitions\Item\UnifiedRoleDefinitionItemRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleDefinitions\RoleDefinitionsRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleEligibilityScheduleInstances\Item\UnifiedRoleEligibilityScheduleInstanceItemRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleEligibilityScheduleInstances\RoleEligibilityScheduleInstancesRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleEligibilityScheduleRequests\Item\UnifiedRoleEligibilityScheduleRequestItemRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleEligibilityScheduleRequests\RoleEligibilityScheduleRequestsRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleEligibilitySchedules\Item\UnifiedRoleEligibilityScheduleItemRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleEligibilitySchedules\RoleEligibilitySchedulesRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DirectoryRequestBuilder 
{
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The roleAssignments property
    */
    public function roleAssignments(): RoleAssignmentsRequestBuilder {
        return new RoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The roleAssignmentScheduleInstances property
    */
    public function roleAssignmentScheduleInstances(): RoleAssignmentScheduleInstancesRequestBuilder {
        return new RoleAssignmentScheduleInstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The roleAssignmentScheduleRequests property
    */
    public function roleAssignmentScheduleRequests(): RoleAssignmentScheduleRequestsRequestBuilder {
        return new RoleAssignmentScheduleRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The roleAssignmentSchedules property
    */
    public function roleAssignmentSchedules(): RoleAssignmentSchedulesRequestBuilder {
        return new RoleAssignmentSchedulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The roleDefinitions property
    */
    public function roleDefinitions(): RoleDefinitionsRequestBuilder {
        return new RoleDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The roleEligibilityScheduleInstances property
    */
    public function roleEligibilityScheduleInstances(): RoleEligibilityScheduleInstancesRequestBuilder {
        return new RoleEligibilityScheduleInstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The roleEligibilityScheduleRequests property
    */
    public function roleEligibilityScheduleRequests(): RoleEligibilityScheduleRequestsRequestBuilder {
        return new RoleEligibilityScheduleRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The roleEligibilitySchedules property
    */
    public function roleEligibilitySchedules(): RoleEligibilitySchedulesRequestBuilder {
        return new RoleEligibilitySchedulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new DirectoryRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/roleManagement/directory{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property directory for roleManagement
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
     * Read-only. Nullable.
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
     * Update the navigation property directory in roleManagement
     * @param RbacApplication $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(RbacApplication $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property directory for roleManagement
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
     * Read-only. Nullable.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, RbacApplication::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property directory in roleManagement
     * @param RbacApplication $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(RbacApplication $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.roleManagement.directory.roleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleAssignmentItemRequestBuilder
    */
    public function roleAssignmentsById(string $id): UnifiedRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignment_id'] = $id;
        return new UnifiedRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.roleManagement.directory.roleAssignmentScheduleInstances.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder
    */
    public function roleAssignmentScheduleInstancesById(string $id): UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignmentScheduleInstance_id'] = $id;
        return new UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.roleManagement.directory.roleAssignmentScheduleRequests.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleAssignmentScheduleRequestItemRequestBuilder
    */
    public function roleAssignmentScheduleRequestsById(string $id): UnifiedRoleAssignmentScheduleRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignmentScheduleRequest_id'] = $id;
        return new UnifiedRoleAssignmentScheduleRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.roleManagement.directory.roleAssignmentSchedules.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleAssignmentScheduleItemRequestBuilder
    */
    public function roleAssignmentSchedulesById(string $id): UnifiedRoleAssignmentScheduleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignmentSchedule_id'] = $id;
        return new UnifiedRoleAssignmentScheduleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.roleManagement.directory.roleDefinitions.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleDefinitionItemRequestBuilder
    */
    public function roleDefinitionsById(string $id): UnifiedRoleDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleDefinition_id'] = $id;
        return new UnifiedRoleDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.roleManagement.directory.roleEligibilityScheduleInstances.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleEligibilityScheduleInstanceItemRequestBuilder
    */
    public function roleEligibilityScheduleInstancesById(string $id): UnifiedRoleEligibilityScheduleInstanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleEligibilityScheduleInstance_id'] = $id;
        return new UnifiedRoleEligibilityScheduleInstanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.roleManagement.directory.roleEligibilityScheduleRequests.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleEligibilityScheduleRequestItemRequestBuilder
    */
    public function roleEligibilityScheduleRequestsById(string $id): UnifiedRoleEligibilityScheduleRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleEligibilityScheduleRequest_id'] = $id;
        return new UnifiedRoleEligibilityScheduleRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.roleManagement.directory.roleEligibilitySchedules.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleEligibilityScheduleItemRequestBuilder
    */
    public function roleEligibilitySchedulesById(string $id): UnifiedRoleEligibilityScheduleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleEligibilitySchedule_id'] = $id;
        return new UnifiedRoleEligibilityScheduleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
