<div class="text-center pb-0 pt-20 sm3:p-20 sm3:pb-0 sm3:pt-20 lg1:p-40 lg1:pb-0 lg1:pt-20 tracking-wider">
      
    <p class="text-4xl"><span class="text-green-900 dark:text-green-400 text-2xl">04. </span>Contact...</p>
    <p class="mt-10 text-lg font-thin lg1:p-10 lg1:pt-0 lg1:pb-0">
      " Getting in touch with others is not only a way to connect, 
      but a way to discover new perspectives, broaden our horizons, 
      and ultimately, enrich our lives. "
    </p>
    <p class="mt-10 text-lg lg1:p-10 lg1:pt-0 lg1:pb-0">
      Currently, I am looking for a web developer job. 
      If you feel that I am a suitable candidate, please do not hesitate to reach out to me. 
      I would be happy to discuss my qualifications and experience further with you.
    </p>
    
    <p class="mt-10 text-sm">Email: <span class="underline underline-offset-4 text-green-900 dark:text-green-300">meilchucabaluna1994@gmail.com</span></p>
    <a href='https://meilchucabaluna.net/' target='blank' class='text-sm'>Website: <span class="underline underline-offset-4 text-green-900 dark:text-green-300">www.meilchucabaluna.net</span></a>
    <p class='text-sm'>Phone: <span class="underline underline-offset-4 text-green-900 dark:text-green-300">09369361714</span></p>

    <x-message/>

    <div class="mt-10">
      <p class="font-light text-sm">Alternatively, you can drop a message here.</p>

        <form 
        method="POST" 
        action="/messages"
        class="text-black">
        @csrf

          <input 
            type="email"
            name="email"
            id="email"
            required
            placeholder="Your Email"
            class="border border-slate-600 w-60 sm1:w-80 p-2 rounded-lg mt-2"
          />
          <br/>
          <textarea 
            id="message"
            name="message"
            placeholder='Message'
            required
            class="w-60 sm1:w-80 mt-2 rounded-lg p-2 h-40 border border-slate-600"
          ></textarea>
          <br/>
          <button type='submit' class='border mt-5 border-green-800 pt-2 pb-2 w-60 sm1:w-80 rounded-lg text-green-800 hover:border-green-600 hover:text-green-600 dark:border-green-400 dark:text-green-400 dark:hover:border-green-200 dark:hover:text-green-200'>Send</button>
        </form>
      
    </div>
    <p class='mt-20 text-sm'>Designed and Created by Meilchu Cabaluna. Source code here<a href="https://github.com/Meil1994/Portfolio" target="blank"><i class='fa-brands fa-github ml-1 text-2xl dark:text-green-300 text-green-900'></i></a></p>
  </div>