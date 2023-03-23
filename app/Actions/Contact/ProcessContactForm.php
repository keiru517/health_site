<?php

namespace App\Actions\Contact;

use Lorisleiva\Actions\ActionRequest;
use Lorisleiva\Actions\Concerns\AsAction;

class ProcessContactForm
{
    use AsAction;

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'string|nullable'
        ];
    }

    public function handle(array $contactData)
    {
        //store the data!
    }

    public function asController(ActionRequest $request)
    {
        return $this->handle($request->validated());
    }

}
