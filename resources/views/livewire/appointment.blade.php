<div>
    {{-- In work, do what you enjoy. --}}
    @if ($callComponent === null)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card border-0 rounded-2xl shadow-sm container ps-none p-5">
                <div>
                    <h2 class="text-center">¿Es la primera vez que agendas una cita?</h2>
                    <br>
                    <div class="m-auto max-w-max">
                        <button type="button" wire:click="firstTime(1)" class="btn btn-success btn-lg">No</button>
                        <button type="button" wire:click="firstTime(0)" class="btn btn-primary btn-lg">Si</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if ($callComponent === 0)
        <livewire:appointment-new-patient />
    @endif

    @if ($callComponent === 1)
        <livewire:appointment-old-patient />
    @endif



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card border-0 rounded-2xl shadow-sm container ps-none p-5">
                <div class="modal-body">
                    <div class="col-lg-9 m-auto">
                        <div>
                            <h2 class="text-center">Agenda tu cita</h2>
                            <br>
                            <p class="m-1">Dia</p>
                            <input wire:model="patient.birth_date" type="date"
                                class="form-control form-control-lg" type="text">
                            <br>
                            <p class="m-1">Hora</p>
                            <select wire:model="patient.sex" class="form-control form-control-lg">
                                <option value="female">...
                                </option>
                                <option value="female">Mujer
                                </option>
                                <option value="male">Hombre
                                </option>
                                <option value="other">Otro
                                </option>
                            </select>
                            <br>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-lg btn-success">Agendar cita</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card border-0 rounded-2xl shadow-sm container ps-none p-5">
                <div class="modal-body">
                    <div class="col-lg-9 m-auto">
                        <div class="text-center">
                            <h2 class="text-center">Confirma tu cita</h2>
                            <br>
                            <p>Te enviamos un correo, confirma tu cita</p>
                            <br>
                            <p class="m-1">Volver enviar <a href=""> email</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
