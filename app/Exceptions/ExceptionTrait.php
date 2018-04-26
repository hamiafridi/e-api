<?php

	namespace App\Exceptions;

	use Symfony\Component\Httpkernel\Exception\NotFoundHttpException;
	use Illuminate\Database\Eloquent\ModelNotFoundException;
	use Symfony\Component\HttpFoundation\Response;

	Trait ExceptionTrait {


		public function apiException($request, $e)
		{
			
			if ($this->isModel($e)) {
               return $this->modelResponse();
            }

            if($this->isHttp($e)) {
               return $this->httpResponse();
            }

            return parent::render($request, $e);

		}



		public function httpResponse()
		{
			return response([

                    'errors' => 'Incorrect Route'

               ], Response::HTTP_NOT_FOUND);
		}

		public function modelResponse()
		{
			return response([

                    'errors' => 'Model Not Found'

                ], Response::HTTP_NOT_FOUND);
		}

		public function isModel($e)
		{
			return $e instanceof ModelNotFoundException;
		}

		public function isHttp($e)
		{
			return $e instanceof NotFoundHttpException;
		}
	
	
	}
