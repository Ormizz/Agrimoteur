<div>
creer un contrat
    <input type="text" wire:model="numcontrat" placeholder="Numero">
    <input type="text" wire:model="dtecontrat" placeholder="Date de signature">
    <input type="text" wire:model="dureecontrat" placeholder="Durée du contrat">
    <input type="text" wire:model="numparcelle" placeholder="Numero parcelle">
    <input type="text" wire:model="numtypecontrat" placeholder="Numero type contrat">
    <button wire:click="addContrat" type="submit">Valider</button>
</div>
