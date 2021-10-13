<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    function getEvents(){
        $paginate = 10;
        $sumRecord = DB::table('events')->count();
        $data = DB::table('events')->orderBy('created_at')->where('status','!=',-1)->paginate($paginate);
        return view('admin.event.events',[
            'data'=> $data,
            'paginate' => $paginate,
            'sumRecord'=>$sumRecord
        ]);
    }

    function getForm(){
        return view('admin.event.form-event');
    }

    function save(EventRequest $req){

        $event = new Event();
        $startDate = $req->get('startDate');
        $endDate = $req->get('endDate');
        $status = $req->get('status');
        $event->name = $req->get('name');
        $event->brand = $req->get('brand');
        $event->startDate = $startDate;
        $event->endDate = $endDate;
        $event->portfolio = $req->get('portfolio');
        $event->ticketPrice = $req->get('ticketPrice');
        $event->status = $status;
        if ($startDate > $endDate){
            return redirect()
                ->back()
                ->with('date','The start date cannot be greater than the end date')
                ->withInput();
        }

        if ($endDate < Carbon::now('Asia/Ho_Chi_Minh') && ($status == 1 || $status == 2)){
            return redirect()
                ->back()
                ->with('errorStatus',"End date is less than current date, so can't select ongoing or upcoming status")
                ->withInput();
        }

        $event->save();
        return redirect()
            ->back()
            ->with('success','Success');
    }


    function getInformationUpdate($id){
        $item = DB::table('events')->find($id);
       return view('admin.event.form-event',[
           'item'=> $item
       ]);
    }
    function update(EventRequest  $request){
        $startDate = $request->get('startDate');
        $endDate = $request->get('endDate');
        $status = $request->get('status');
        $name = $request->get('name');
        $brand = $request->get('brand');
        $portfolio = $request->get('portfolio');
        $ticketPrice = $request->get('ticketPrice');
        if ($startDate > $endDate){
            return redirect()
                ->back()
                ->with('date','The start date cannot be greater than the end date')
                ->withInput();
        }

        if ($endDate < Carbon::now('Asia/Ho_Chi_Minh') && ($status == 1 || $status == 2)){
            return redirect()
                ->back()
                ->with('errorStatus',"End date is less than current date, so can't select ongoing or upcoming status")
                ->withInput();
        }
        DB::table('events')->where('id', $request->get('id'))->update([
            'name'=> $name, 'brand'=>$brand,
            'startDate'=>$startDate, 'endDate'=>$endDate,
            'portfolio'=>$portfolio, 'ticketPrice'=>$ticketPrice,
            'status'=> $status
        ]);
        return redirect('/admin/event')
            ->with('successUpdate','Success Update');

    }

    function delete($id){
        DB::table('events')->where('id', $id)->update([
            'status'=> -1,
            'delete_at'=> Carbon::now('Asia/Ho_Chi_Minh')
        ]);
        return redirect('/admin/event')
            ->with('deleteSuccess','delete success');
    }

    function searchByName(Request $request){
        $paginate = 10;
        $name = $request->get('nameQuery');
        $event = DB::table('events')
            ->where('name','like', '%'.$name.'%')
            ->orWhere('brand','like', '%'.$name.'%')
            ->orWhere('portfolio','like', '%'.$name.'%')
            ->paginate($paginate);
        $event->appends($request->all());
        return view('admin.event.events',[
            'data' => $event,
            'paginate' => $paginate,
            'oldQuery' => $name
        ]);
    }

}
