<?php

namespace Morrislaptop\Journal\Http\Middleware;

use Morrislaptop\Journal\Journal;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return Journal::check($request) ? $next($request) : abort(403);
    }
}
