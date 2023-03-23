<?php

namespace App\Actions\Leads;

use App\Models\EndUsers\Lead;
use Lorisleiva\Actions\Concerns\AsAction;

class ProcessFreeTrialAction
{
    use AsAction;

    public function rules() : array
    {
        return [
            'first_name' => 'bail|required',
            'last_name'  => 'bail|required',
            'email'  => 'bail|required|email',
            'phone'  => 'bail|required|numeric',
            'club_id'  => 'bail|required|exists:locations,id',
            'consent' => 'bail|required|boolean'
        ];
    }

    public function handle(array $lead) : string | false
    {
        $results = false;

        // @todo - Convert this to Event Sourcing, recruit!
        $payload = [
            'location_id' => $lead['club_id'],
            'first_name' => $lead['first_name'],
            'last_name' => $lead['last_name'],
            'email' => $lead['email'],
            'primary_phone' => $lead['phone'],
        ];

        if($new_lead = Lead::create($payload))
        {
            $results = $new_lead->id;
        }

        return $results;
    }

    public function asController() : string | false
    {
        sleep(5);
        return $this->handle(request()->all());
    }

    public function jsonResponse(string | false $result)
    {
        $results = ['success' => false];
        $code = 500;

        if($result)
        {
            $results = ['success' => true];
            $code = 200;
        }

        return response($results, $code);
    }
}
