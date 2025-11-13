<?php 
class final_rest
{



	/**
	 * @api  /api/v1/setTemp/
	 * @apiName setTemp
	 * @apiDescription Add remote temperature measurement
	 *
	 * @apiParam {string} location
	 * @apiParam {String} sensor
	 * @apiParam {double} value
	 *
	 * @apiSuccess {Integer} status
	 * @apiSuccess {string} message
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *              "status":0,
	 *              "message": ""
	 *     }
	 *
	 * @apiError Invalid data types
	 *
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *              "status":1,
	 *              "message":"Error Message"
	 *     }
	 *
	 */
	public static function setTemp ($location, $sensor, $value)
	{
		if (!is_numeric($value)) {
			$retData["status"]=1;
			$retData["message"]="'$value' is not numeric";
		}
		else {
			try {
				EXEC_SQL("insert into temperature (location, sensor, value, date) values (?,?,?,CURRENT_TIMESTAMP)",$location, $sensor, $value);
				$retData["status"]=0;
				$retData["message"]="insert of '$value' for location: '$location' and sensor '$sensor' accepted";
			}
			catch  (Exception $e) {
				$retData["status"]=1;
				$retData["message"]=$e->getMessage();
			}
		}

		return json_encode ($retData);
	}


	/**
	 * @api  /api/v1/getLevel/
	 * @apiName getLevel
	 * @apiDescription Return all level data from database
	 *
	 * @apiSuccess {Integer} status
	 * @apiSuccess {string} message
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *              "status":0,
	 *              "message": ""
	 *              "result": [
	 *                { 
	 *                  levelID: 1,
	 *                  description: "",
	 *                  prompt: ""
	 *              ]
	 *     }
	 *
	 * @apiError Invalid data types
	 *
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *              "status":1,
	 *              "message":"Error Message"
	 *     }
	 *
	 */
	public static function getLevel () {
			return json_encode ($retData);
	}

	/**
	 * @api  /api/v1/addLog/
	 * @apiName addLog
	 * @apiDescription Add record to logfile
	 *
	 * @apiParam {string} level
	 * @apiParam {String} systemPrompt
	 * @apiParam {String} userPrompt
	 * @apiParam {string} chatResponse
	 * @apiParam {Integer} inputTokens
	 * @apiParam {Integer} outputTokens
	 *
	 * @apiSuccess {Integer} status
	 * @apiSuccess {string} message
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *              "status":0,
	 *              "message": ""
	 *     }
	 *
	 * @apiError Invalid data types
	 *
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *              "status":1,
	 *              "message":"Error Message"
	 *     }
	 *
	 */
	public static function addLog ($request, $weather1, $weather2, $openai) 
	{
		try {
				EXEC_SQL("insert into transactions (request, weather1, weather2, openai) values(?, ?, ?, ?)", $request, $weather1, $weather2, $openai);
				$retData["status"]=0;
				$retData["message"]="insert successful for request: '$request', for weather1: '$weather1', for weather2: '$weather2', for openai: '$openai'";
		}
		catch  (Exception $e) {
				$retData["status"]=1;
				$retData["message"]=$e->getMessage();
		}

		return json_encode ($retData);
	}
  

	/**
	 * @api  /api/v1/getLog/
	 * @apiName getLog
	 * @apiDescription Retrieve Log Records
	 *
	 * @apiParam {string} date - must be in the format YYYY-MM-DD
	 * @apiParam {String} numRecords
	 *
	 * @apiSuccess {Integer} status
	 * @apiSuccess {string} message
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *              "status":0,
	 *              "message": ""
	 *              "result": [
	 *                { 
	 *                  timeStamp: "YYYY-MM-DD HH:MM:SS",
	 *                  level: "",
	 *                  systemPrompt: "",
	 *                  userPrompt: "",
	 *                  chatResponse: "",
	 *                  inputTokens: 0,
	 *                  outputTokens: 0
	 *              ]
	 *     }
	 *
	 * @apiError Invalid data types
	 *
	 * @apiErrorExample Error-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *              "status":1,
	 *              "message":"Error Message"
	 *     }
	 *
	 */
	public static function getLog ($date, $numrecords) {
		$dateToSearch = "$date%";

		// check for invalid data type
		if (intval($numrecords) <= 0) {
			$numrecords = 1;
		}

		try {
			$retData["result"] = GET_SQL("SELECT * FROM transactions WHERE timestamp LIKE ? ORDER BY timestamp DESC LIMIT ?", $dateToSearch, $numrecords);
			$retData["status"] = 0;
			$retData["message"] = "";
		} catch (Exception $e) {
			$retData["status"] = 1;
			$retData["message"] = $e->getMessage();
		}

		return json_encode ($retData);
	}
}
