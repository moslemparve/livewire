<div>
    <form class="mt-3" wire:submit.prevent="submit">

        <div class="row">
            <div class="col-lg-6">
                <select class=" text-start form-control form-control2" wire:model="schoolName" aria-label="">
                    <a class="dropdown-item" href="#">
                        <option> Select student's school</option>
                    </a>
                    <option value="euro"> EURO</option>
                    <option value="pkr"> PKR</option>
                </select>
                @error('schoolName')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-lg-6">
                <div class="">
                    <div class="input-group">
                        <label for="inputPassword2" class="visually-hidden">Telephone</label>
                        <input id="phone" wire:model="SchoolPhone" type="tel" class="form-control form-control2 {{ $errors->has('SchoolPhone') ? ' has-error' : '' }}">
                    </div>
                    @error('SchoolPhone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6">
                <div class="h-100">
                    <label for="inputPassword2" class="visually-hidden">Email</label>
                    <input type="email" class="form-control form-control2" wire:model="email" id="inputPassword2"
                        placeholder="Email">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="h-100">
                    <label for="inputPassword2" class="visually-hidden">Facebook</label>
                    <input type="text" class="form-control form-control2" wire:model="facebookLink" id="inputPassword2"
                        placeholder="Facebook">
                        @error('facebookLink')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
            </div>

        </div>
        <div class="row mt-3">
            <div class="col-lg-6">
                <div class="h-100">
                    <label for="inputPassword2" class="visually-hidden">Website</label>
                    <input type="text" class="form-control form-control2" wire:model="websiteLink" id="inputPassword2"
                        placeholder="Website">
                        @error('websiteLink')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="h-100">
                    <label for="inputPassword2" class="visually-hidden">Linkedin</label>
                    <input type="text" class="form-control form-control2" wire:model="linkedInLink" id="inputPassword2"
                        placeholder="Linkedin">
                        @error('linkedInLink')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
            </div>

        </div>


        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-blue w-25 p-2">Save</button>
                    {{-- <button class="btn btn-blue w-25 p-2">Save & Close</button>
               
               <button class="btn btn-danger w-25 p-2">Cancel</button> --}}
                </div>
            </div>


        </div>
    </form>
</div>
