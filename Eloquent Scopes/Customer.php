```
class Customer extends Model
{
  protected $guarded = [];
  
  public function scopeActive($query)
  {
    return $query->where('active', 1)
  }
  public function scopeInactive($query)
  {
    return $query->where('active', 0)
  }
}
```
