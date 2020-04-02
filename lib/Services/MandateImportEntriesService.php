<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Services;

use \GoCardlessPro\Core\Paginator;
use \GoCardlessPro\Core\Util;
use \GoCardlessPro\Core\ListResponse;
use \GoCardlessPro\Resources\MandateImportEntry;
use \GoCardlessPro\Core\Exception\InvalidStateException;


/**
 * Service that provides access to the MandateImportEntry
 * endpoints of the API
 */
class MandateImportEntriesService extends BaseService
{

    protected $envelope_key   = 'mandate_import_entries';
    protected $resource_class = '\GoCardlessPro\Resources\MandateImportEntry';


    /**
     * Add a mandate import entry
     *
     * Example URL: /mandate_import_entries
     *
     * @param  string[mixed] $params An associative array for any params
     * @return MandateImportEntry
     **/
    public function create($params = array())
    {
        $path = "/mandate_import_entries";
        if(isset($params['params'])) { 
            $params['body'] = json_encode(array($this->envelope_key => (object)$params['params']));
        
            unset($params['params']);
        }

        
        $response = $this->api_client->post($path, $params);
        

        return $this->getResourceForResponse($response);
    }

    /**
     * List all mandate import entries
     *
     * Example URL: /mandate_import_entries
     *
     * @param  string[mixed] $params An associative array for any params
     * @return ListResponse
     **/
    protected function _doList($params = array())
    {
        $path = "/mandate_import_entries";
        if(isset($params['params'])) { $params['query'] = $params['params'];
            unset($params['params']);
        }

        
        $response = $this->api_client->get($path, $params);
        

        return $this->getResourceForResponse($response);
    }

    /**
     * List all mandate import entries
     *
     * Example URL: /mandate_import_entries
     *
     * @param  string[mixed] $params
     * @return Paginator
     **/
    public function all($params = array())
    {
        return new Paginator($this, $params);
    }

}
